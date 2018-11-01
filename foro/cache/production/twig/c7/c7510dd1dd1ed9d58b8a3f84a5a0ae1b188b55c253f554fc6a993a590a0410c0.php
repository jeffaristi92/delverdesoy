<?php

/* forumlist_body.html */
class __TwigTemplate_53d4c08db73ad293c76b3b11e239a36273145ede9c34780ac88903abf6d01fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            // line 11
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 12
                echo "\t\t<div class=\"forabg category-";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                if (($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", array()) == 0)) {
                    echo " elegant";
                }
                echo "\" data-hide-description=\"";
                echo $this->getAttribute(($context["definition"] ?? null), "HIDE_FORUM_DESCRIPTION", array());
                echo "\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 16
                // line 17
                echo "\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 18
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" data-id=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t";
                // line 19
                if (($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", array()) != 0)) {
                    // line 20
                    echo "\t\t\t\t\t\t<dd class=\"topics\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                    // line 21
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</dd>
\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 25
                // line 26
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 30
            echo "\t";
            // line 31
            echo "
\t";
            // line 32
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 33
                echo "\t\t";
                // line 34
                echo "\t\t<li class=\"row forum-";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\">
\t\t\t";
                // line 35
                // line 36
                echo "\t\t\t";
                ob_start();
                // line 37
                echo "\t\t\t";
                if (((($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", array()) == 0) &&  !$this->getAttribute($context["forumrow"], "CLICKS", array())) &&  !$this->getAttribute($context["forumrow"], "S_IS_LINK", array()))) {
                    // line 38
                    echo "\t\t\t\t<div class=\"forum-statistics\">
\t\t\t\t\t<span class=\"dfn\">";
                    // line 39
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo "</span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <span class=\"value\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo "</span><span class=\"comma\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                    echo "</span>
\t\t\t\t\t<span class=\"dfn\">";
                    // line 40
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <span class=\"value\">";
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo "</span>
\t\t\t\t</div>
\t\t\t";
                }
                // line 43
                echo "\t\t\t";
                $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
                $context['definition']->set('EXTRA_DESC', $value);
                // line 44
                echo "\t\t\t<dl class=\"row-item ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                if (twig_trim_filter($this->getAttribute(($context["definition"] ?? null), "EXTRA_DESC", array()))) {
                    echo " elegant-row";
                }
                echo "\">
\t\t\t\t<dt title=\"";
                // line 45
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t";
                // line 46
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 47
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 48
                if ((($context["S_ENABLE_FEEDS"] ?? null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    // line 49
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 50
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 51
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    // line 56
                    echo "\t\t\t\t\t\t\t";
                    // line 57
                    echo "\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 58
                    // line 59
                    echo "\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\" data-id=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 61
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                    echo "<div class=\"forum-description\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                    echo "</div>";
                }
                // line 62
                echo "\t\t\t\t\t\t";
                echo $this->getAttribute(($context["definition"] ?? null), "EXTRA_DESC", array());
                echo "
\t\t\t\t\t\t";
                // line 63
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 64
                    echo "\t\t\t\t\t\t\t<div class=\"forum-moderators\"><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", array())) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t<div class=\"subforums-list\">
\t\t\t\t\t\t\t";
                    // line 68
                    // line 69
                    echo "\t\t\t\t\t\t\t<strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 72
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                        // line 73
                        echo "<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon ";
                        // line 74
                        if ($this->getAttribute($context["subforum"], "IS_LINK", array())) {
                            echo "fa-external-link";
                        } else {
                            echo "fa-file-o";
                        }
                        echo " fa-fw ";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " icon-red";
                        }
                        echo " icon-md\" aria-hidden=\"true\"></i>";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", array())) {
                            echo "<span>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                            echo "</span>";
                        }
                        // line 75
                        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                    // line 78
                    // line 79
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 81
                echo "
\t\t\t\t\t\t";
                // line 82
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 83
                    echo "\t\t\t\t\t\t";
                    if ((twig_trim_filter($this->getAttribute(($context["definition"] ?? null), "EXTRA_DESC", array())) == "")) {
                        // line 84
                        echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                        // line 85
                        if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                            // line 86
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                            echo "</strong>
\t\t\t\t\t\t\t";
                        } elseif (( !$this->getAttribute(                        // line 87
$context["forumrow"], "S_IS_LINK", array()) && $this->getAttribute($context["forumrow"], "TOPICS", array()))) {
                            // line 88
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                            echo "</strong>
\t\t\t\t\t\t\t";
                        }
                        // line 90
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t";
                    if (( !$this->getAttribute($context["forumrow"], "S_IS_LINK", array()) && $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array()))) {
                        // line 93
                        echo "\t\t\t\t\t\t\t<div class=\"forum-lastpost\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<span><strong>";
                        // line 94
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "</strong> <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                        echo "\" class=\"lastsubject\">";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                        echo "</a></span>
\t\t\t\t\t\t\t\t<span>";
                        // line 95
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo ", ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 101
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 102
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 103
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 104
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", array()) != 0)) {
                        // line 105
                        echo "\t\t\t\t\t<dd class=\"topics\">";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                        echo " <dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                        echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                        // line 106
                        echo $this->getAttribute($context["forumrow"], "POSTS", array());
                        echo " <dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo "</dfn></dd>
\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
                    // line 110
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        // line 111
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "\" class=\"forum-mcplink\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 112
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 114
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                        // line 115
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\" class=\"forum-mcplink\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 116
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 118
                    echo "\t\t\t\t\t\t

\t\t\t\t\t\t\t";
                    // line 120
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t<dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t\t";
                        // line 122
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", array())) {
                            // line 123
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                            echo "</a> <br />
\t\t\t\t\t\t\t\t";
                        }
                        // line 126
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 127
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            // line 128
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 129
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 132
                        echo "\t\t\t\t\t\t\t\t<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                        echo "
\t\t\t\t\t\t\t";
                    } else {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS");
                        echo "<br />&nbsp;
\t\t\t\t\t\t\t";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 139
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 141
                echo "\t\t\t</dl>
\t\t\t";
                // line 142
                // line 143
                echo "\t\t</li>
\t\t";
                // line 144
                // line 145
                echo "\t";
            }
            // line 146
            echo "
\t";
            // line 147
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 148
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 152
                // line 153
                echo "\t";
            }
            // line 154
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 156
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 158
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 158,  541 => 156,  535 => 154,  532 => 153,  531 => 152,  525 => 148,  523 => 147,  520 => 146,  517 => 145,  516 => 144,  513 => 143,  512 => 142,  509 => 141,  505 => 139,  500 => 136,  494 => 134,  488 => 132,  482 => 129,  475 => 128,  473 => 127,  466 => 126,  456 => 124,  454 => 123,  452 => 122,  447 => 121,  445 => 120,  441 => 118,  435 => 116,  428 => 115,  426 => 114,  421 => 112,  414 => 111,  412 => 110,  408 => 108,  401 => 106,  394 => 105,  391 => 104,  389 => 103,  381 => 102,  379 => 101,  375 => 99,  372 => 98,  362 => 95,  351 => 94,  348 => 93,  345 => 92,  341 => 90,  332 => 88,  330 => 87,  322 => 86,  320 => 85,  317 => 84,  314 => 83,  312 => 82,  309 => 81,  305 => 79,  304 => 78,  301 => 77,  294 => 75,  276 => 74,  259 => 73,  256 => 72,  252 => 71,  245 => 69,  244 => 68,  241 => 67,  238 => 66,  229 => 64,  227 => 63,  222 => 62,  216 => 61,  207 => 60,  204 => 59,  203 => 58,  198 => 57,  196 => 56,  193 => 55,  184 => 51,  174 => 50,  171 => 49,  169 => 48,  166 => 47,  160 => 46,  156 => 45,  148 => 44,  144 => 43,  134 => 40,  124 => 39,  121 => 38,  118 => 37,  115 => 36,  114 => 35,  109 => 34,  107 => 33,  105 => 32,  102 => 31,  100 => 30,  94 => 26,  93 => 25,  87 => 23,  82 => 21,  77 => 20,  75 => 19,  61 => 18,  58 => 17,  57 => 16,  44 => 12,  41 => 11,  40 => 10,  37 => 9,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forumlist_body.html", "");
    }
}
