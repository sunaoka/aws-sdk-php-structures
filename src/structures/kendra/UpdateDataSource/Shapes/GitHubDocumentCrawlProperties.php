<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CrawlRepositoryDocuments
 * @property bool $CrawlIssue
 * @property bool $CrawlIssueComment
 * @property bool $CrawlIssueCommentAttachment
 * @property bool $CrawlPullRequest
 * @property bool $CrawlPullRequestComment
 * @property bool $CrawlPullRequestCommentAttachment
 */
class GitHubDocumentCrawlProperties extends Shape
{
    /**
     * @param array{
     *     CrawlRepositoryDocuments?: bool,
     *     CrawlIssue?: bool,
     *     CrawlIssueComment?: bool,
     *     CrawlIssueCommentAttachment?: bool,
     *     CrawlPullRequest?: bool,
     *     CrawlPullRequestComment?: bool,
     *     CrawlPullRequestCommentAttachment?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
