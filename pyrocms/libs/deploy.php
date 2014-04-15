<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Deploy your site with git</title>

  <meta content="authenticity_token" name="csrf-param" />
<meta content="KYJh0n17K5Zlt3I4wkdRZ7aBAyZpzXlYPZM/Kjqv/+Q=" name="csrf-token" />
  <meta name="viewport" content="width=960">


    <link type="text/plain" rel="author" href="https://github.com/humans.txt" />
    <meta content="gist" name="octolytics-app-id" /><meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="2979782" name="octolytics-actor-id" /><meta content="adamconder" name="octolytics-actor-login" /><meta content="3a9587cdfc490ecd478da161062ca1903e66a76e1905c09cef3240353deedcd6" name="octolytics-actor-hash" />

  <link href="/assets/application-6e2fb09bfb69bc98ebbcfda2e1c5f286.css" media="screen, print" rel="stylesheet" />
  <script src="/assets/application-3478240748add4b65799c094a456fbe8.js"></script>

      <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@github">
  <meta property="og:title" content="oodavid/README.md">
  <meta property="og:type" content="githubog:gist">
  <meta property="og:url" content="https://gist.github.com//oodavid/1809044">
  <meta property="og:image" content="https://1.gravatar.com/avatar/4262055c4f931f97127481d263dd5579?d=https%3A%2F%2Fidenticons.github.com%2Fd5d6f4f33df6216588dad86b825be352.png&amp;s=140">
  <meta property="og:site_name" content="GitHub Gists">
  <meta property="og:description" content="Deploy your site with git - Gist is a simple way to share snippets of text and code with others.">
  <meta name="description" content="Deploy your site with git - Gist is a simple way to share snippets of text and code with others.">


</head>

<body class="logged_in ">

  <div id="wrapper">
    

    <div id="header" class="header header-logged-in">
      <div class="container clearfix">
        <a class="header-logo-wordmark" href="https://gist.github.com/">
          <span class="octicon octicon-logo-github"></span>
          <span class="octicon-logo octicon-logo-gist"></span>
        </a>

        <div class="divider-vertical"></div>
        <div class="topsearch">
  <form id="top_search_form" action="/search" data-pjax-remote=push accept-charset="UTF-8">
    <div class="search">
      <input type="text" class="search js-search js-navigation-enable js-quick-search" name="q" placeholder="Search&#x2026;" data-hotkey="/" autocomplete=off autocorrect=off value="" >

      <div class="search-results js-search-results js-navigation-container"></div>
    </div>
    <div class="divider-vertical"></div>
  </form>
  <ul class="top-nav">
    <li class="explore"><a href="/discover/">Discover Gists</a></li>
  </ul>
</div>

        <ul id="user-links">
  <li>
    <a href="/adamconder" class="name">
      <img src="https://1.gravatar.com/avatar/9ca6f39178956ad98bff20751c040296?d=https%3A%2F%2Fidenticons.github.com%2F40f03b46a3d8646a38abddf9d1388bf9.png&s=140" width="20" height="20"> adamconder
    </a>
  </li>
  <li>
    <a href="https://gist.github.com" id="new_gist" class="tooltipped downwards" title="Create a New Gist">
      <span class="octicon octicon-gist-new"></span>
    </a>
  </li>
  <li>
    <a href="https://github.com" class="tooltipped downwards" title="Go to GitHub" data-skip-pjax>
      <span class="octicon octicon-octoface"></span>
    </a>
  </li>
  <li>
    <form action="https://gist.github.com/logout" method="post">
      <input name="authenticity_token" type="hidden" value="KYJh0n17K5Zlt3I4wkdRZ7aBAyZpzXlYPZM/Kjqv/+Q=" />
      <button class="logout-button tooltipped downwards" id="logout" type="submit" title="Log Out">
        <span class="octicon octicon-log-out"></span>
      </button>
    </form>
  </li>
</ul>

      </div>
    </div>

    <div class="site-content" id="js-pjax-container" data-pjax-container>
      <div class=" site-container js-site-container" data-url="/oodavid/1809044">
  
  

<meta content="true" name="octolytics-dimension-public" /><meta content="1809044" name="octolytics-dimension-gist_id" /><meta content="1809044" name="octolytics-dimension-gist_name" /><meta content="false" name="octolytics-dimension-anonymous" /><meta content="46879" name="octolytics-dimension-owner_id" /><meta content="oodavid" name="octolytics-dimension-owner_login" /><meta content="true" name="octolytics-dimension-forked" /><meta content="1105010" name="octolytics-dimension-parent_gist_id" /><meta content="1105010" name="octolytics-dimension-parent_gist_name" /><meta content="false" name="octolytics-dimension-parent_anonymous" /><meta content="408962" name="octolytics-dimension-parent_owner_id" /><meta content="aronwoost" name="octolytics-dimension-parent_owner_login" />

<div class="pagehead repohead">
  <div class="container">
    <div class="title-actions-bar">
      <ul class="pagehead-actions">
            <li>
              <div class="gist-advanced-options select-menu js-menu-container js-select-menu">

                <span class="minibutton select-menu-button js-menu-target">
                  <span class="octicon octicon-gear"></span>
                </span>

                <div class="select-menu-modal-holder js-menu-content js-navigation-container js-select-menu-pane">
                  <div class="select-menu-modal">
                    <div class="select-menu-header">
                      <span class="select-menu-title">Advanced options</span>
                      <span class="octicon octicon-remove-close js-menu-close"></span>
                    </div> <!-- /.select-menu-header -->

                    <div class="select-menu-list">

                      <div class="select-menu-item js-navigation-item">
                        <div class="select-menu-item-text js-navigation-open">
                          <a href="/oodavid/1809044/report" data-method="post" data-skip-pjax>Report as Abuse</a>
                        </div>
                      </div> <!-- /.select-menu-item -->

                    </div> <!-- /.select-menu-list -->

                  </div> <!-- /.select-menu-modal -->
                </div> <!-- /.select-menu-modal-holder -->
              </div> <!-- /.select-menu -->
            </li>
          <li>
              <form action="/oodavid/1809044/unstar" data-pjax-remote=replace method="post" accept-charset="UTF-8">
                <input name="authenticity_token" type="hidden" value="KYJh0n17K5Zlt3I4wkdRZ7aBAyZpzXlYPZM/Kjqv/+Q=" />
                <button class="minibutton with-count" type="submit"><span class="octicon octicon-star"></span>Unstar</button>
                <a class="social-count js-social-count" href="/oodavid/1809044/stars">318</a>
              </form>
          </li>
          <li>
              <form action="/oodavid/1809044/fork" data-method="post" method="post" accept-charset="UTF-8">
                <button class="minibutton with-count fork-button" type="submit"><span class="octicon octicon-git-branch"></span>Fork</button>
                <a class="social-count js-social-count" href="/oodavid/1809044/forks">96</a>
              </form>
          </li>


      </ul>
      <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
        <span class="repo-label"><span>public</span></span>
        <span class="mega-octicon octicon-gist" ></span>
        <div class="meta">
          <div class="gist-author">
            <img src="https://1.gravatar.com/avatar/4262055c4f931f97127481d263dd5579?d=https%3A%2F%2Fidenticons.github.com%2Fd5d6f4f33df6216588dad86b825be352.png&s=140" width="26" height="26">
            <span class="author vcard">
                <span itemprop="title"><a href="/oodavid">oodavid</a></span>
            </span> /
            <strong><a href="/oodavid/1809044" class="js-current-repository">README.md</a></strong>
          </div>
          <div class="gist-timestamp">
              <span class="datetime">Last active <time class="js-relative-date" title="2014-03-01T15:02:17Z" datetime="2014-03-01T15:02:17Z">2014-03-01</time></span>
              <span class="text"> &mdash; forked from <a href="/aronwoost/1105010">aronwoost/README.md</a></span>
          </div>
      </h1>
    </div>

  </div>
</div>


  <div class="gist-description container">
    <p><div>Deploy your site with git</div></p>
  </div>
<div class="gist container js-gist-container" data-version="08a14e3306dad6b15269b82b86358facbedf4901">
    <div class="root-pane">
  <div class="menu-container">
    <ul class="menu gisttabs">
      <li>
        <a href="/oodavid/1809044" class="selected">
          Gist Detail
        </a>
      </li>

        <li class="revision-count">
          <a href="/oodavid/1809044/revisions" >
            Revisions
            <span class="counter">13</span>
          </a>
        </li>

        <li>
          <a href="/oodavid/1809044/stars" >
            Stars
            <span class="counter">318</span>
          </a>
        </li>

        <li>
          <a href="/oodavid/1809044/forks" >
            Forks
            <span class="counter">96</span>
          </a>
        </li>
    </ul>
  </div>

  <ul class="export-references">
    <li>
      <a href="/oodavid/1809044/download" class="minibutton" data-skip-pjax="true" rel="nofollow"><span class="octicon octicon-cloud-download"></span>Download Gist</a>
    </li>
    <li>
      <label for="url-field"><strong>Clone</strong> this gist</label>
      <input type="text" readonly spellcheck="false" class="url-field js-url-field js-copy-toggle" name="url-field" value="https://gist.github.com/1809044.git" data-copy-toggle-display="/oodavid/1809044">
    </li>
    <li>
      <label for="embed-field"><strong>Embed</strong> this gist</label>
      <input type="text" readonly spellcheck="false" class="url-field js-url-field" name="embed-field" value="&lt;script src=&quot;https://gist.github.com/oodavid/1809044.js&quot;&gt;&lt;/script&gt;">
    </li>
    <li>
      <label for="link-field"><strong>Link to</strong> this gist</label>
      <input type="text" readonly spellcheck="false" class="url-field js-url-field" name="link-field" value="https://gist.github.com/oodavid/1809044">
    </li>
  </ul>
</div>


  <div class="column files">
        <div id="file-readme-md" class="bubble">
          <div class="file-box ">
            <div class="meta">
              <div class="file-info">
                <span class="file-type-icon"><span class="octicon octicon-gist"></span></span>
                <strong class="file-name js-selectable-text">README.md</strong>
              </div>
              <div class="file-actions">
                <span class="file-language">Markdown</span>
                <ul class="button-group">
                  <li><a title="Permalink" href="#file-readme-md" class="file-actions-button tooltipped downwards permalink"><span class="octicon octicon-link"></span></a></li>
                  <li><a title="View Raw" href="https://gist.githubusercontent.com/oodavid/1809044/raw/10e96c987723da94ec94a8132f6314ac338dfe9d/README.md" data-skip-pjax class="file-actions-button tooltipped downwards raw-url"><span class="octicon octicon-code"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="suppressed">
              <a class="js-show-suppressed-file">File suppressed. Click to show.</a>
            </div>
            

    <div class="readme context-loader-container context-loader-overlay" id="readme">
      <article class="markdown-body js-file "
          data-task-list-update-url="/oodavid/1809044/file/README.md">
        <h1>
<a name="deploy-your-site-with-git" class="anchor" href="#deploy-your-site-with-git" rel="noreferrer"><span class="octicon octicon-link"></span></a>Deploy your site with git</h1>

<p>This gist assumes:</p>

<ul>
<li>you have a local git repo</li>
<li>with an online remote repository (github / bitbucket etc)</li>
<li>and a cloud server (Rackspace cloud / Amazon EC2 etc)

<ul>
<li>your (PHP) scripts are served from /var/www/html/</li>
<li>your webpages are executed by apache</li>
<li>apache's home directory is /var/www/ </li>
<li><strong><em>(this describes a pretty standard apache setup on Redhat / Ubuntu / CentOS / Amazon AMI etc)</em></strong></li>
</ul>
</li>
</ul><p><strong><em>you should be able to do the same with Java, Perl, RoR, JSP etc. however you'll need to recreate the (rather simple) PHP script</em></strong></p>

<h1>
<a name="1---on-your-local-machine" class="anchor" href="#1---on-your-local-machine" rel="noreferrer"><span class="octicon octicon-link"></span></a>1 - On your local machine</h1>

<p><em>Here we add the deployment script and push it to the origin, the deployment script runs git commands to PULL from the origin thus updating your server</em></p>

<h2>
<a name="grab-a-deployment-script-for-your-site" class="anchor" href="#grab-a-deployment-script-for-your-site" rel="noreferrer"><span class="octicon octicon-link"></span></a>Grab a deployment script for your site</h2>

<p>See <a href="#file_deploy.php" rel="noreferrer">deploy.php</a></p>

<h2>
<a name="add-commit-and-push-this-to-github" class="anchor" href="#add-commit-and-push-this-to-github" rel="noreferrer"><span class="octicon octicon-link"></span></a>Add, commit and push this to github</h2>

<pre><code>git add deploy.php
git commit -m 'Added the git deployment script'
git push -u origin master
</code></pre>

<h1>
<a name="2---on-your-server" class="anchor" href="#2---on-your-server" rel="noreferrer"><span class="octicon octicon-link"></span></a>2 - On your server</h1>

<p><em>Here we install and setup git on the server, we also create an SSH key so the server can talk to the origin without using passwords etc</em></p>

<h2>
<a name="install-git" class="anchor" href="#install-git" rel="noreferrer"><span class="octicon octicon-link"></span></a>Install git...</h2>

<p>After you've installed git, make sure it's a relatively new version - old scripts quickly become problematic as github / bitbucket / whatever will have the latests and greatest, if you don't have a recent version you'll need to figure out how to upgrade it :-)</p>

<pre><code>git --version
</code></pre>

<h3>
<a name="on-centos-56" class="anchor" href="#on-centos-56" rel="noreferrer"><span class="octicon octicon-link"></span></a>...on CentOS 5.6</h3>

<pre><code># Add a nice repo
rpm -Uvh http://repo.webtatic.com/yum/centos/5/latest.rpm
# Install git
yum install --enablerepo=webtatic git-all
</code></pre>

<h3>
<a name="using-generic-yum" class="anchor" href="#using-generic-yum" rel="noreferrer"><span class="octicon octicon-link"></span></a>...using generic yum</h3>

<pre><code>sudo yum install git-core
</code></pre>

<h2>
<a name="setup-git" class="anchor" href="#setup-git" rel="noreferrer"><span class="octicon octicon-link"></span></a>Setup git</h2>

<pre><code>git config --global user.name "Server"
git config --global user.email "server@server.com"
</code></pre>

<h2>
<a name="create-an-ssh-directory-for-the-apache-user" class="anchor" href="#create-an-ssh-directory-for-the-apache-user" rel="noreferrer"><span class="octicon octicon-link"></span></a>Create an ssh directory for the apache user</h2>

<pre><code>sudo mkdir /var/www/.ssh
sudo chown -R apache:apache /var/www/.ssh/
</code></pre>

<h2>
<a name="generate-a-deploy-key-for-apache-user" class="anchor" href="#generate-a-deploy-key-for-apache-user" rel="noreferrer"><span class="octicon octicon-link"></span></a>Generate a deploy key for apache user</h2>

<pre><code>sudo -Hu apache ssh-keygen -t rsa # choose "no passphrase"
sudo cat /var/www/.ssh/id_rsa.pub
</code></pre>

<h1>
<a name="3---on-your-origin-github--bitbucket" class="anchor" href="#3---on-your-origin-github--bitbucket" rel="noreferrer"><span class="octicon octicon-link"></span></a>3 - On your origin (github / bitbucket)</h1>

<p><em>Here we add the SSH key to the origin to allow your server to talk without passwords. In the case of GitHub we also setup a post-receive hook which will automatically call the deploy URL thus triggering a PULL request from the server to the origin</em></p>

<h2>
<a name="github-instructions" class="anchor" href="#github-instructions" rel="noreferrer"><span class="octicon octicon-link"></span></a>GitHub instructions</h2>

<h3>
<a name="add-the-ssh-key-to-your-user" class="anchor" href="#add-the-ssh-key-to-your-user" rel="noreferrer"><span class="octicon octicon-link"></span></a>Add the SSH key to your user</h3>

<ol>
<li><a href="https://github.com/settings/ssh" rel="noreferrer">https://github.com/settings/ssh</a></li>
<li>Create a new key</li>
<li>Paste the deploy key you generated on the server</li>
</ol><h3>
<a name="set-up-service-hook" class="anchor" href="#set-up-service-hook" rel="noreferrer"><span class="octicon octicon-link"></span></a>Set up service hook</h3>

<ol>
<li><a href="https://github.com/oodavid/server.com/admin/hooks" rel="noreferrer">https://github.com/oodavid/server.com/admin/hooks</a></li>
<li>Select the <strong>Post-Receive URL</strong> service hook</li>
<li>Enter the URL to your deployment script - <a href="http://server.com/deploy.php" rel="noreferrer">http://server.com/deploy.php</a>
</li>
<li>Click <strong>Update Settings</strong>
</li>
</ol><h2>
<a name="bitbucket-instructions" class="anchor" href="#bitbucket-instructions" rel="noreferrer"><span class="octicon octicon-link"></span></a>Bitbucket instructions</h2>

<h3>
<a name="add-the-ssh-key-to-your-account" class="anchor" href="#add-the-ssh-key-to-your-account" rel="noreferrer"><span class="octicon octicon-link"></span></a>Add the SSH key to your account</h3>

<ol>
<li><a href="https://bitbucket.org/account/ssh-keys/" rel="noreferrer">https://bitbucket.org/account/ssh-keys/</a></li>
<li>Create a new key</li>
<li>Paste the deploy key you generated on the server</li>
</ol><h3>
<a name="set-up-service-hook-1" class="anchor" href="#set-up-service-hook-1" rel="noreferrer"><span class="octicon octicon-link"></span></a>Set up service hook</h3>

<ol>
<li>Go to: Repo &gt; Admin &gt; Services</li>
<li>Select "POST"</li>
<li>Add the URL to your deployment script - <a href="http://server.com/deploy.php" rel="noreferrer">http://server.com/deploy.php</a>
</li>
<li>Save</li>
</ol><p><strong><em>Thanks to DrewAPicture in the comments for this one</em></strong></p>

<h1>
<a name="4---on-the-server" class="anchor" href="#4---on-the-server" rel="noreferrer"><span class="octicon octicon-link"></span></a>4 - On the Server</h1>

<p><em>Here we clone the origin repo into a chmodded /var/www/html folder</em></p>

<h2>
<a name="pull-from-origin" class="anchor" href="#pull-from-origin" rel="noreferrer"><span class="octicon octicon-link"></span></a>Pull from origin</h2>

<pre><code>sudo chown -R apache:apache /var/www/html
sudo -Hu apache git clone git@github.com:you/server.git /var/www/html
</code></pre>

<h1>
<a name="rejoice" class="anchor" href="#rejoice" rel="noreferrer"><span class="octicon octicon-link"></span></a>Rejoice!</h1>

<p>Now you're ready to go :-)</p>

<h2>
<a name="some-notes" class="anchor" href="#some-notes" rel="noreferrer"><span class="octicon octicon-link"></span></a>Some notes</h2>

<ul>
<li>Navigate the the deployment script to trigger a pull and see the output:

<ul>
<li><a href="http://server.com/deploy.php" rel="noreferrer">http://server.com/deploy.php</a></li>
<li><strong><em>this is useful for debugging too ;-)</em></strong></li>
<li>When you push to GitHub your site will automatically ping the above url (and pull your code)</li>
<li>When you push to Bitbucket you will need to manually ping the above url</li>
<li>It would be trivial to setup another repo on your server for different branches (develop, release-candidate etc) - repeat most of the steps but checkout a branch after pulling the repo down</li>
</ul>
</li>
</ul><h2>
<a name="sources" class="anchor" href="#sources" rel="noreferrer"><span class="octicon octicon-link"></span></a>Sources</h2>

<ul>
<li>
<a href="https://gist.github.com/1105010" rel="noreferrer">Build auto-deploy with php and git(hub) on an EC2 Amazon AMI instance</a> - who in turn referenced:

<ul>
<li><a href="https://github.com/rsms/ec2-webapp/blob/master/INSTALL.md#readme" rel="noreferrer">ec2-webapp / INSTALL.md</a></li>
<li><a href="http://writing.markchristian.org/how-to-deploy-your-code-from-github-automatic" rel="noreferrer">How to deploy your code from GitHub automatically</a></li>
</ul>
</li>
</ul>
      </article>
    </div>



          </div>
        </div>
        <div id="file-deploy-php" class="bubble">
          <div class="file-box ">
            <div class="meta">
              <div class="file-info">
                <span class="file-type-icon"><span class="octicon octicon-gist"></span></span>
                <strong class="file-name js-selectable-text">deploy.php</strong>
              </div>
              <div class="file-actions">
                <span class="file-language">PHP</span>
                <ul class="button-group">
                  <li><a title="Permalink" href="#file-deploy-php" class="file-actions-button tooltipped downwards permalink"><span class="octicon octicon-link"></span></a></li>
                  <li><a title="View Raw" href="https://gist.githubusercontent.com/oodavid/1809044/raw/424c5f206a9de5900bc4ed900b17d9ffbc4b4f46/deploy.php" data-skip-pjax class="file-actions-button tooltipped downwards raw-url"><span class="octicon octicon-code"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="suppressed">
              <a class="js-show-suppressed-file">File suppressed. Click to show.</a>
            </div>
            



    <div class="file-data">
      <table cellpadding="0" cellspacing="0" class="lines highlight">
        <tr>
          <td class="line-numbers">
            <span class="line-number" id="file-deploy-php-L1" rel="file-deploy-php-L1">1</span>
            <span class="line-number" id="file-deploy-php-L2" rel="file-deploy-php-L2">2</span>
            <span class="line-number" id="file-deploy-php-L3" rel="file-deploy-php-L3">3</span>
            <span class="line-number" id="file-deploy-php-L4" rel="file-deploy-php-L4">4</span>
            <span class="line-number" id="file-deploy-php-L5" rel="file-deploy-php-L5">5</span>
            <span class="line-number" id="file-deploy-php-L6" rel="file-deploy-php-L6">6</span>
            <span class="line-number" id="file-deploy-php-L7" rel="file-deploy-php-L7">7</span>
            <span class="line-number" id="file-deploy-php-L8" rel="file-deploy-php-L8">8</span>
            <span class="line-number" id="file-deploy-php-L9" rel="file-deploy-php-L9">9</span>
            <span class="line-number" id="file-deploy-php-L10" rel="file-deploy-php-L10">10</span>
            <span class="line-number" id="file-deploy-php-L11" rel="file-deploy-php-L11">11</span>
            <span class="line-number" id="file-deploy-php-L12" rel="file-deploy-php-L12">12</span>
            <span class="line-number" id="file-deploy-php-L13" rel="file-deploy-php-L13">13</span>
            <span class="line-number" id="file-deploy-php-L14" rel="file-deploy-php-L14">14</span>
            <span class="line-number" id="file-deploy-php-L15" rel="file-deploy-php-L15">15</span>
            <span class="line-number" id="file-deploy-php-L16" rel="file-deploy-php-L16">16</span>
            <span class="line-number" id="file-deploy-php-L17" rel="file-deploy-php-L17">17</span>
            <span class="line-number" id="file-deploy-php-L18" rel="file-deploy-php-L18">18</span>
            <span class="line-number" id="file-deploy-php-L19" rel="file-deploy-php-L19">19</span>
            <span class="line-number" id="file-deploy-php-L20" rel="file-deploy-php-L20">20</span>
            <span class="line-number" id="file-deploy-php-L21" rel="file-deploy-php-L21">21</span>
            <span class="line-number" id="file-deploy-php-L22" rel="file-deploy-php-L22">22</span>
            <span class="line-number" id="file-deploy-php-L23" rel="file-deploy-php-L23">23</span>
            <span class="line-number" id="file-deploy-php-L24" rel="file-deploy-php-L24">24</span>
            <span class="line-number" id="file-deploy-php-L25" rel="file-deploy-php-L25">25</span>
            <span class="line-number" id="file-deploy-php-L26" rel="file-deploy-php-L26">26</span>
            <span class="line-number" id="file-deploy-php-L27" rel="file-deploy-php-L27">27</span>
            <span class="line-number" id="file-deploy-php-L28" rel="file-deploy-php-L28">28</span>
            <span class="line-number" id="file-deploy-php-L29" rel="file-deploy-php-L29">29</span>
            <span class="line-number" id="file-deploy-php-L30" rel="file-deploy-php-L30">30</span>
            <span class="line-number" id="file-deploy-php-L31" rel="file-deploy-php-L31">31</span>
            <span class="line-number" id="file-deploy-php-L32" rel="file-deploy-php-L32">32</span>
            <span class="line-number" id="file-deploy-php-L33" rel="file-deploy-php-L33">33</span>
            <span class="line-number" id="file-deploy-php-L34" rel="file-deploy-php-L34">34</span>
            <span class="line-number" id="file-deploy-php-L35" rel="file-deploy-php-L35">35</span>
            <span class="line-number" id="file-deploy-php-L36" rel="file-deploy-php-L36">36</span>
            <span class="line-number" id="file-deploy-php-L37" rel="file-deploy-php-L37">37</span>
            <span class="line-number" id="file-deploy-php-L38" rel="file-deploy-php-L38">38</span>
            <span class="line-number" id="file-deploy-php-L39" rel="file-deploy-php-L39">39</span>
            <span class="line-number" id="file-deploy-php-L40" rel="file-deploy-php-L40">40</span>
            <span class="line-number" id="file-deploy-php-L41" rel="file-deploy-php-L41">41</span>
            <span class="line-number" id="file-deploy-php-L42" rel="file-deploy-php-L42">42</span>
            <span class="line-number" id="file-deploy-php-L43" rel="file-deploy-php-L43">43</span>
            <span class="line-number" id="file-deploy-php-L44" rel="file-deploy-php-L44">44</span>
            <span class="line-number" id="file-deploy-php-L45" rel="file-deploy-php-L45">45</span>
            <span class="line-number" id="file-deploy-php-L46" rel="file-deploy-php-L46">46</span>
            <span class="line-number" id="file-deploy-php-L47" rel="file-deploy-php-L47">47</span>
            <span class="line-number" id="file-deploy-php-L48" rel="file-deploy-php-L48">48</span>
            <span class="line-number" id="file-deploy-php-L49" rel="file-deploy-php-L49">49</span>
            <span class="line-number" id="file-deploy-php-L50" rel="file-deploy-php-L50">50</span>
          </td>
          <td class="line-data">
            <pre class="line-pre"><div class="line" id="file-deploy-php-LC1"><span class="cp">&lt;?php</span></div><div class="line" id="file-deploy-php-LC2">	<span class="sd">/**</span></div><div class="line" id="file-deploy-php-LC3"><span class="sd">	 * GIT DEPLOYMENT SCRIPT</span></div><div class="line" id="file-deploy-php-LC4"><span class="sd">	 *</span></div><div class="line" id="file-deploy-php-LC5"><span class="sd">	 * Used for automatically deploying websites via github or bitbucket, more deets here:</span></div><div class="line" id="file-deploy-php-LC6"><span class="sd">	 *</span></div><div class="line" id="file-deploy-php-LC7"><span class="sd">	 *		https://gist.github.com/1809044</span></div><div class="line" id="file-deploy-php-LC8"><span class="sd">	 */</span></div><div class="line" id="file-deploy-php-LC9">&nbsp;</div><div class="line" id="file-deploy-php-LC10">	<span class="c1">// The commands</span></div><div class="line" id="file-deploy-php-LC11">	<span class="nv">$commands</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class="line" id="file-deploy-php-LC12">		<span class="s1">&#39;echo $PWD&#39;</span><span class="p">,</span></div><div class="line" id="file-deploy-php-LC13">		<span class="s1">&#39;whoami&#39;</span><span class="p">,</span></div><div class="line" id="file-deploy-php-LC14">		<span class="s1">&#39;git pull&#39;</span><span class="p">,</span></div><div class="line" id="file-deploy-php-LC15">		<span class="s1">&#39;git status&#39;</span><span class="p">,</span></div><div class="line" id="file-deploy-php-LC16">		<span class="s1">&#39;git submodule sync&#39;</span><span class="p">,</span></div><div class="line" id="file-deploy-php-LC17">		<span class="s1">&#39;git submodule update&#39;</span><span class="p">,</span></div><div class="line" id="file-deploy-php-LC18">		<span class="s1">&#39;git submodule status&#39;</span><span class="p">,</span></div><div class="line" id="file-deploy-php-LC19">	<span class="p">);</span></div><div class="line" id="file-deploy-php-LC20">&nbsp;</div><div class="line" id="file-deploy-php-LC21">	<span class="c1">// Run the commands for output</span></div><div class="line" id="file-deploy-php-LC22">	<span class="nv">$output</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class="line" id="file-deploy-php-LC23">	<span class="k">foreach</span><span class="p">(</span><span class="nv">$commands</span> <span class="k">AS</span> <span class="nv">$command</span><span class="p">){</span></div><div class="line" id="file-deploy-php-LC24">		<span class="c1">// Run it</span></div><div class="line" id="file-deploy-php-LC25">		<span class="nv">$tmp</span> <span class="o">=</span> <span class="nb">shell_exec</span><span class="p">(</span><span class="nv">$command</span><span class="p">);</span></div><div class="line" id="file-deploy-php-LC26">		<span class="c1">// Output</span></div><div class="line" id="file-deploy-php-LC27">		<span class="nv">$output</span> <span class="o">.=</span> <span class="s2">&quot;&lt;span style=</span><span class="se">\&quot;</span><span class="s2">color: #6BE234;</span><span class="se">\&quot;</span><span class="s2">&gt;</span><span class="se">\$</span><span class="s2">&lt;/span&gt; &lt;span style=</span><span class="se">\&quot;</span><span class="s2">color: #729FCF;</span><span class="se">\&quot;</span><span class="s2">&gt;</span><span class="si">{</span><span class="nv">$command</span><span class="si">}</span><span class="se">\n</span><span class="s2">&lt;/span&gt;&quot;</span><span class="p">;</span></div><div class="line" id="file-deploy-php-LC28">		<span class="nv">$output</span> <span class="o">.=</span> <span class="nb">htmlentities</span><span class="p">(</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$tmp</span><span class="p">))</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class="line" id="file-deploy-php-LC29">	<span class="p">}</span></div><div class="line" id="file-deploy-php-LC30">&nbsp;</div><div class="line" id="file-deploy-php-LC31">	<span class="c1">// Make it pretty for manual user access (and why not?)</span></div><div class="line" id="file-deploy-php-LC32"><span class="cp">?&gt;</span><span class="x"></span></div><div class="line" id="file-deploy-php-LC33"><span class="x">&lt;!DOCTYPE HTML&gt;</span></div><div class="line" id="file-deploy-php-LC34"><span class="x">&lt;html lang=&quot;en-US&quot;&gt;</span></div><div class="line" id="file-deploy-php-LC35"><span class="x">&lt;head&gt;</span></div><div class="line" id="file-deploy-php-LC36"><span class="x">	&lt;meta charset=&quot;UTF-8&quot;&gt;</span></div><div class="line" id="file-deploy-php-LC37"><span class="x">	&lt;title&gt;GIT DEPLOYMENT SCRIPT&lt;/title&gt;</span></div><div class="line" id="file-deploy-php-LC38"><span class="x">&lt;/head&gt;</span></div><div class="line" id="file-deploy-php-LC39"><span class="x">&lt;body style=&quot;background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;&quot;&gt;</span></div><div class="line" id="file-deploy-php-LC40"><span class="x">&lt;pre&gt;</span></div><div class="line" id="file-deploy-php-LC41"><span class="x"> .  ____  .    ____________________________</span></div><div class="line" id="file-deploy-php-LC42"><span class="x"> |/      \|   |                            |</span></div><div class="line" id="file-deploy-php-LC43"><span class="x">[| &lt;span style=&quot;color: #FF0000;&quot;&gt;&amp;hearts;    &amp;hearts;&lt;/span&gt; |]  | Git Deployment Script v0.1 |</span></div><div class="line" id="file-deploy-php-LC44"><span class="x"> |___==___|  /              &amp;copy; oodavid 2012 |</span></div><div class="line" id="file-deploy-php-LC45"><span class="x">              |____________________________|</span></div><div class="line" id="file-deploy-php-LC46">&nbsp;</div><div class="line" id="file-deploy-php-LC47"><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$output</span><span class="p">;</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class="line" id="file-deploy-php-LC48"><span class="x">&lt;/pre&gt;</span></div><div class="line" id="file-deploy-php-LC49"><span class="x">&lt;/body&gt;</span></div><div class="line" id="file-deploy-php-LC50"><span class="x">&lt;/html&gt;</span></div></pre>
          </td>
        </tr>
      </table>
    </div>

          </div>
        </div>
    <div id="comments" class="new-comments">
      
<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/95c934fa2c3362794bf62ff8c59ada08?d=https%3A%2F%2Fidenticons.github.com%2Fe6a2266e85c2eb40bf7751ce8b092fbc.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-355597">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/DrewAPicture" class="comment-header-author">DrewAPicture</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-355597">
              <a href="/oodavid/1809044/#comment-355597">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-355597">
              <a href="/oodavid/1809044/#comment-355597" class="comment-header-date">
                <time class="js-relative-date" title="2012-06-21T20:21:54Z" datetime="2012-06-21T20:21:54Z">2012-06-21</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>FYI, I got this to work using BitBucket pretty easily. They may have made allowances for POST requests in the last few months.</p>

<p>On BitBucket, went to the Repo &gt; Admin &gt; Services. Selected POST, dropped in my URL and saved it. Seems to be working as expected.</p>

<p>Thanks for the script, it makes my life a lot easier.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://1.gravatar.com/avatar/4262055c4f931f97127481d263dd5579?d=https%3A%2F%2Fidenticons.github.com%2Fd5d6f4f33df6216588dad86b825be352.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-355599">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/oodavid" class="comment-header-author">oodavid</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-355599">
              <a href="/oodavid/1809044/#comment-355599">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-355599">
              <a href="/oodavid/1809044/#comment-355599" class="comment-header-date">
                <time class="js-relative-date" title="2012-06-21T20:27:14Z" datetime="2012-06-21T20:27:14Z">2012-06-21</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>Glad it helped you out - the real trick for me was getting it so that Apache could play nicely with git...</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://0.gravatar.com/avatar/e94c791f6d5fc2d45de0d418b0031065?d=https%3A%2F%2Fidenticons.github.com%2Fbc217d629ee6306da75bbfbaf596ee61.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-383250">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/nebriv" class="comment-header-author">nebriv</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-383250">
              <a href="/oodavid/1809044/#comment-383250">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-383250">
              <a href="/oodavid/1809044/#comment-383250" class="comment-header-date">
                <time class="js-relative-date" title="2012-07-31T01:29:23Z" datetime="2012-07-31T01:29:23Z">2012-07-31</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>Thanks! it works well for me on shared hosting, without keys!</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://1.gravatar.com/avatar/acacfb410f8da30675c3ad2a22687551?d=https%3A%2F%2Fidenticons.github.com%2Faa0d2c54b836cc2dea60be8935537467.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-402882">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/bgallagh3r" class="comment-header-author">bgallagh3r</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-402882">
              <a href="/oodavid/1809044/#comment-402882">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-402882">
              <a href="/oodavid/1809044/#comment-402882" class="comment-header-date">
                <time class="js-relative-date" title="2012-08-21T12:26:14Z" datetime="2012-08-21T12:26:14Z">2012-08-21</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>Just a heads up.  It would be smart to add <code>git reset --hard HEAD</code> in the commands before git pull.  If for some reason your working directory is dirty (files changed, log files created etc) then the deploy will fail.  Resetting the HEAD to the last commit will prevent a deploy failure.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://1.gravatar.com/avatar/3adf1e302136b4d5a6433e5cef99d4ad?d=https%3A%2F%2Fidenticons.github.com%2Fb0700f5951fb3b9d757e05adf894e5b9.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-405092">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/mattbanks" class="comment-header-author">mattbanks</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-405092">
              <a href="/oodavid/1809044/#comment-405092">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-405092">
              <a href="/oodavid/1809044/#comment-405092" class="comment-header-date">
                <time class="js-relative-date" title="2012-08-23T13:43:34Z" datetime="2012-08-23T13:43:34Z">2012-08-23</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>Do you worry about security of the deploy.php script? Is there any harm is someone hits that script, or anything malicious they can do?</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://1.gravatar.com/avatar/0597ffa65c7c8b88fd2ee511ecff6c7c?d=https%3A%2F%2Fidenticons.github.com%2F7888f9529ac5cc94babdcadfe4635506.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-559930">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/weblance2" class="comment-header-author">weblance2</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-559930">
              <a href="/oodavid/1809044/#comment-559930">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-559930">
              <a href="/oodavid/1809044/#comment-559930" class="comment-header-date">
                <time class="js-relative-date" title="2012-09-07T11:38:46Z" datetime="2012-09-07T11:38:46Z">2012-09-07</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>got stuck here, any ideas on how to change permissions?</p>

<p>root@staging ~]# sudo -Hu apache ssh-keygen -t rsa # choose "no passphrase"<br>
Generating public/private rsa key pair.<br>
Enter file in which to save the key (/var/www/.ssh/id_rsa): githubkey<br>
Enter passphrase (empty for no passphrase): <br>
Enter same passphrase again: <br>
open githubkey failed: Permission denied.<br>
Saving the key failed: githubkey.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://1.gravatar.com/avatar/0597ffa65c7c8b88fd2ee511ecff6c7c?d=https%3A%2F%2Fidenticons.github.com%2F7888f9529ac5cc94babdcadfe4635506.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-560139">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/weblance2" class="comment-header-author">weblance2</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-560139">
              <a href="/oodavid/1809044/#comment-560139">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-560139">
              <a href="/oodavid/1809044/#comment-560139" class="comment-header-date">
                <time class="js-relative-date" title="2012-09-07T12:39:00Z" datetime="2012-09-07T12:39:00Z">2012-09-07</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>I created a key by skipping the create directory but now i get </p>

<p><code><br>
[root@staging ~]# sudo -Hu apache git clone <a href="mailto:git@github.com" rel="noreferrer">git@github.com</a>:weblance2/primary-trunk.git /var/www/html/<br>
fatal: destination path '/var/www/html' already exists and is not an empty directory.<br></code></p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/430d5aa3800275edad129b408e80f1a0?d=https%3A%2F%2Fidenticons.github.com%2F908f4ac923c6f5e44460c44ee16ce4cb.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-580663">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/natxet" class="comment-header-author">natxet</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-580663">
              <a href="/oodavid/1809044/#comment-580663">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-580663">
              <a href="/oodavid/1809044/#comment-580663" class="comment-header-date">
                <time class="js-relative-date" title="2012-09-29T13:50:23Z" datetime="2012-09-29T13:50:23Z">2012-09-29</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>as @mattbanks says, no security?</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/bb9d06558f0abc8d10a21fb37d3760db?d=https%3A%2F%2Fidenticons.github.com%2F3ce3bd7d63a2c9c81983cc8e9bd02ae5.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-585867">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/JamesBrooks" class="comment-header-author">JamesBrooks</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-585867">
              <a href="/oodavid/1809044/#comment-585867">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-585867">
              <a href="/oodavid/1809044/#comment-585867" class="comment-header-date">
                <time class="js-relative-date" title="2012-10-11T22:13:43Z" datetime="2012-10-11T22:13:43Z">2012-10-11</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>This might interest you: JamesBrooks/git-runner (with the git-runner-deploy gem).</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/bb9d06558f0abc8d10a21fb37d3760db?d=https%3A%2F%2Fidenticons.github.com%2F3ce3bd7d63a2c9c81983cc8e9bd02ae5.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-585868">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/JamesBrooks" class="comment-header-author">JamesBrooks</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-585868">
              <a href="/oodavid/1809044/#comment-585868">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-585868">
              <a href="/oodavid/1809044/#comment-585868" class="comment-header-date">
                <time class="js-relative-date" title="2012-10-11T22:14:11Z" datetime="2012-10-11T22:14:11Z">2012-10-11</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p><a href="https://github.com/JamesBrooks/git-runner" rel="noreferrer">https://github.com/JamesBrooks/git-runner</a> even -.-</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://0.gravatar.com/avatar/7b73618510b0faede263230800301ef6?d=https%3A%2F%2Fidenticons.github.com%2F25fa108005e63c630429134bc32032e4.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-608206">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/jorijnsmit" class="comment-header-author">jorijnsmit</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-608206">
              <a href="/oodavid/1809044/#comment-608206">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-608206">
              <a href="/oodavid/1809044/#comment-608206" class="comment-header-date">
                <time class="js-relative-date" title="2012-11-26T11:58:50Z" datetime="2012-11-26T11:58:50Z">2012-11-26</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>I got this working but am missing why I created SSH keys?</p>

<p>If I understand the script correctly anyone can hit the URL (<a href="http://server.com/deploy.php" rel="noreferrer">http://server.com/deploy.php</a>) and it will execute a <code>git pull</code>. How is the difference detected between the GitHub WebHook service and a random visitor or a web crawler?</p>

<p>I think I will do some more digging, I found <a href="https://github.com/Coppertino/github-webhook" rel="noreferrer">https://github.com/Coppertino/github-webhook</a> with a similar function but more advanced options like IP filtering and SSH/FTP support.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/593ba129a6016fedb890c4ed037ff3ed?d=https%3A%2F%2Fidenticons.github.com%2F1e3f5c7224c234a243cfc8b8234d7d21.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-722542">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/markomarkovic" class="comment-header-author">markomarkovic</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-722542">
              <a href="/oodavid/1809044/#comment-722542">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-722542">
              <a href="/oodavid/1809044/#comment-722542" class="comment-header-date">
                <time class="js-relative-date" title="2013-01-13T22:44:30Z" datetime="2013-01-13T22:44:30Z">2013-01-13</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>I've rewrote this gist and created a 'normal' repository for it. <a href="https://github.com/markomarkovic/simple-php-git-deploy" rel="noreferrer">Check it out!</a></p>

<p>It features:</p>

<ul>
<li>easy configuration</li>
<li>no need to create the clone on the server first, it's doing that automatically</li>
<li>basic security (through obscurity) so the script can't be triggered by anyone except the one who knows the secret</li>
<li>update the code using non-master branch</li>
<li>delete files that are no longer in the repository (DANGEROUS!)</li>
<li>ignore certain files/directories when updating</li>
<li>error detection: if any step prior to deploy fails, nothing is changed</li>
<li>stamp the deployed code version</li>
<li>backup the target prior to deploy</li>
</ul>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/15a190d597c03c73b08ad51486017449?d=https%3A%2F%2Fidenticons.github.com%2F66e045602d2865e9415c13ad38140f48.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-743498">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/zanematthew" class="comment-header-author">zanematthew</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-743498">
              <a href="/oodavid/1809044/#comment-743498">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-743498">
              <a href="/oodavid/1809044/#comment-743498" class="comment-header-date">
                <time class="js-relative-date" title="2013-01-22T19:11:00Z" datetime="2013-01-22T19:11:00Z">2013-01-22</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>If this is all "local" why not just use native git? using a "working tree" and a "bare repo"?</p>

<p><a href="https://gist.github.com/4597331" rel="noreferrer">https://gist.github.com/4597331</a><br><a href="http://stackoverflow.com/questions/5283262/what-is-a-git-work-tree-why-have-i-never-needed-to-set-this-as-an-env-var-why" rel="noreferrer">http://stackoverflow.com/questions/5283262/what-is-a-git-work-tree-why-have-i-never-needed-to-set-this-as-an-env-var-why</a></p>

<p>Also things like branch, and other useful into are already coming over in the payload from the github post-receive hook, <a href="https://help.github.com/articles/post-receive-hooks" rel="noreferrer">https://help.github.com/articles/post-receive-hooks</a> not sure why those are passed in via $_GET</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://1.gravatar.com/avatar/b392668690888406fa8a196a17575a4d?d=https%3A%2F%2Fidenticons.github.com%2Fa0045a359ec61e3dae3adbd889f8704c.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-760122">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/tabacitu" class="comment-header-author">tabacitu</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-760122">
              <a href="/oodavid/1809044/#comment-760122">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-760122">
              <a href="/oodavid/1809044/#comment-760122" class="comment-header-date">
                <time class="js-relative-date" title="2013-01-29T17:02:51Z" datetime="2013-01-29T17:02:51Z">2013-01-29</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>Awesome, thanks! Just a heads-up, on Ubuntu my user was www-data, not apache.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/95c934fa2c3362794bf62ff8c59ada08?d=https%3A%2F%2Fidenticons.github.com%2Fe6a2266e85c2eb40bf7751ce8b092fbc.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-771130">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/DrewAPicture" class="comment-header-author">DrewAPicture</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-771130">
              <a href="/oodavid/1809044/#comment-771130">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-771130">
              <a href="/oodavid/1809044/#comment-771130" class="comment-header-date">
                <time class="js-relative-date" title="2013-02-11T12:37:51Z" datetime="2013-02-11T12:37:51Z">2013-02-11</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>@mattbanks, @natxet: RE: security: Two things I usually do is to rename the script to {randomstring}.php, and modify it not to expose the username for all to see. Another option is to restrict referrer access to the script via htaccess.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/e9df80575fade81ddc459e688e6d4c8a?d=https%3A%2F%2Fidenticons.github.com%2F2991f6f7ce88b7f3b87a91ab2251c6c3.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-774410">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/davemac" class="comment-header-author">davemac</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-774410">
              <a href="/oodavid/1809044/#comment-774410">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-774410">
              <a href="/oodavid/1809044/#comment-774410" class="comment-header-date">
                <time class="js-relative-date" title="2013-02-15T12:10:09Z" datetime="2013-02-15T12:10:09Z">2013-02-15</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>I agree with @zanematthew. This method seems like overkill for what can be accomplished with a post-receive hook and a bare repo on the target server. Or am I missing something?</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/cabd031cbf7cf3ab00fa0807f2eacc26?d=https%3A%2F%2Fidenticons.github.com%2Fe0d9f101cd13a2203d73c7e17fb66594.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-780286">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/anthonyringoet" class="comment-header-author">anthonyringoet</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-780286">
              <a href="/oodavid/1809044/#comment-780286">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-780286">
              <a href="/oodavid/1809044/#comment-780286" class="comment-header-date">
                <time class="js-relative-date" title="2013-02-24T11:50:02Z" datetime="2013-02-24T11:50:02Z">2013-02-24</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>Already had ssh keys for my server because was pulling in changes manually. I'm using this in development and works perfect for me. Thanks!</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/0eb7bc69c910cdcb467e1e16906273b1?d=https%3A%2F%2Fidenticons.github.com%2Faf9ec4951f94f2cc90151e46e4bbd21e.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-933630">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/aguilarcarlos" class="comment-header-author">aguilarcarlos</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-933630">
              <a href="/oodavid/1809044/#comment-933630">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-933630">
              <a href="/oodavid/1809044/#comment-933630" class="comment-header-date">
                <time class="js-relative-date" title="2013-10-21T13:51:49Z" datetime="2013-10-21T13:51:49Z">2013-10-21</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>This is only when my server is on PHP really? At same I can't to build another for Python, it's cool this congrats. Still I not test this, but I think so it will function... thanks.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://0.gravatar.com/avatar/a5a88079dda2e24c45c289f6954bc55f?d=https%3A%2F%2Fidenticons.github.com%2F48f5f7d8a42c86ff77e8ccfc8d349669.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-986411">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/vamsiikrishna" class="comment-header-author">vamsiikrishna</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-986411">
              <a href="/oodavid/1809044/#comment-986411">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-986411">
              <a href="/oodavid/1809044/#comment-986411" class="comment-header-date">
                <time class="js-relative-date" title="2014-01-14T12:16:48Z" datetime="2014-01-14T12:16:48Z">2014-01-14</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>@aguilarcarlos please check <br><a href="https://github.com/vamsiikrishna/yeli" rel="noreferrer">https://github.com/vamsiikrishna/yeli</a></p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://0.gravatar.com/avatar/3271d6cb2265aa10ccf850095527068a?d=https%3A%2F%2Fidenticons.github.com%2F6a58a9aa6e713126fa24fea3c6c52fcd.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-993388">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/slouma2000" class="comment-header-author">slouma2000</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-993388">
              <a href="/oodavid/1809044/#comment-993388">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-993388">
              <a href="/oodavid/1809044/#comment-993388" class="comment-header-date">
                <time class="js-relative-date" title="2014-01-25T18:16:27Z" datetime="2014-01-25T18:16:27Z">2014-01-25</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>In my case I needed to change (etc/passwd) [Centos 6.2]</p>

<p>apache<img class="emoji" title=":x:" alt=":x:" src="https://a248.e.akamai.net/assets.github.com/images/icons/emoji/x.png" height="20" width="20" align="absmiddle">502:503:Apache server:/:/sbin/nologin<br>
To <br>
apache<img class="emoji" title=":x:" alt=":x:" src="https://a248.e.akamai.net/assets.github.com/images/icons/emoji/x.png" height="20" width="20" align="absmiddle">502:503:Apache server:/var/www:/sbin/nologin</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="discussion-bubble js-comment-container">
  <img class="discussion-bubble-avatar" src="https://2.gravatar.com/avatar/4f0e58e7b9e6e434a46adff67897652e?d=https%3A%2F%2Fidenticons.github.com%2F25a93cd26951d21bb6f2cdd38138f290.png&s=140" width="48" height="48">
  <div class="discussion-bubble-content bubble">
    <div class="discussion-bubble-inner">

      <div class="comment js-comment " id="comment-998133">
        <div class="comment-header normal-comment-header">
          <a href="#" class="comment-type-icon octicon octicon-comment"></a>
          <a href="/bobef" class="comment-header-author">bobef</a>
          <span class="comment-header-action-text">
            <span id="gistcomment-998133">
              <a href="/oodavid/1809044/#comment-998133">commented</a></span>
          </span>
          <span class="comment-header-right">
            <span id="gistcomment-998133">
              <a href="/oodavid/1809044/#comment-998133" class="comment-header-date">
                <time class="js-relative-date" title="2014-02-02T17:48:45Z" datetime="2014-02-02T17:48:45Z">2014-02-02</time>
              </a>
            </span>
          </span>
        </div>


        <div class="comment-content">
          <div class="edit-comment-hide">
            <!-- <div class="comment-form-error">There has been an error</div> -->
            <div class="comment-body markdown-body markdown-format js-comment-body">
                <p>Another PHP tool for the job. A bit more elaborate one.</p>

<p><a href="https://github.com/Perennials/apache-git-sync-tool" rel="noreferrer">https://github.com/Perennials/apache-git-sync-tool</a></p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

    </div>
      <form action="/oodavid/1809044/comments"
      class="js-comment-form"
      data-pjax-remote=replace method="post" accept-charset="UTF-8">
  <input name="authenticity_token" type="hidden" value="KYJh0n17K5Zlt3I4wkdRZ7aBAyZpzXlYPZM/Kjqv/+Q=" />

  <div class="discussion-bubble">
    <img class="discussion-bubble-avatar" src="https://1.gravatar.com/avatar/9ca6f39178956ad98bff20751c040296?d=https%3A%2F%2Fidenticons.github.com%2F40f03b46a3d8646a38abddf9d1388bf9.png&s=140" width="48" height="48">
    <div class="discussion-bubble-content bubble">
      <div class="discussion-bubble-inner">

        <div class="js-previewable-comment-form previewable-comment-form write-selected" data-preview-url="/preview">
          <div class="comment-form-head tabnav">
            <ul class="js-preview-tabs tabnav-tabs">
              <li><a href="#" class="tabnav-tab js-write-tab write-tab selected" action="write">Write</a></li>
              <li><a href="#" class="tabnav-tab js-preview-tab preview-tab" action="preview">Preview</a></li>
            </ul>
            <span class="tabnav-right">
              <span class="tabnav-widget text">
                Comments are parsed with <a href="http://github.github.com/github-flavored-markdown/" class="gfm-help" target="_blank">GitHub Flavored Markdown</a>
              </span>
            </span>
          </div>

          <div class="comment-form-error" style="display: none;">There has been an error.</div>

          <div class="tab-content write-content js-write-content">
            <div class="textarea-frame">
              <textarea name="comment[body]" placeholder="Leave a comment" class="js-comment-field js-size-to-fit"></textarea>
            </div>
          </div>

          <div class="tab-content preview-content">
            <div class="comment">
              <div class="comment-header normal-comment-header">
                <img class="comment-header-gravatar" src="https://1.gravatar.com/avatar/9ca6f39178956ad98bff20751c040296?d=https%3A%2F%2Fidenticons.github.com%2F40f03b46a3d8646a38abddf9d1388bf9.png&s=140" width="22" height="22">
                <a href="#" class="comment-header-author">adamconder</a>
                <span class="comment-header-action-text"><a href="#">commented</a></span>
                <span class="comment-header-right">
                  <a href="#" class="comment-header-date"><time>just now</time></a>
                </span>
              </div>
              <div class="comment-content">
                <div class="edit-comment-hide">
                  <div class="comment-body markdown-body markdown-format preview-content-body js-preview-content">
                    <p>Nothing to preview</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="form-actions">
    <button class="button primary js-comment-submit" type="submit">Add Comment</button>
  </div>
</form>

  </div>
</div>

  <div class="context-overlay"></div>
</div>

    </div>
    <div class="slow-loading-overlay"></div>
  </div>

  <div id="ajax-error-message" class="flash flash-error">
    <div class="container">
      <span class="octicon octicon-alert"></span>
      Something went wrong with that request. Please try again.
      <a href="#" class="octicon octicon-remove-close ajax-error-dismiss"></a>
    </div>
  </div>

  <footer>
    <div id="footer">
  <div class="container clearfix">

    <!-- Served fresh by github-fe103-cp1-prd.iad.github.net -->
    <p class="right">&copy; 2014 GitHub Inc. All rights reserved.</p>
    <a class="left" href="/">
      <span class="mega-octicon octicon-mark-github"></span>
    </a>
    <ul id="legal">
      <li><a href="https://github.com/blog">The GitHub Blog</a></li>
      <li><a href="mailto:support@github.com">Support</a></li>
      <li><a href="https://github.com/contact">Contact</a></li>
    </ul>

  </div><!-- /.container -->
</div><!-- /.#footer -->

  </footer>

</body>
</html>
