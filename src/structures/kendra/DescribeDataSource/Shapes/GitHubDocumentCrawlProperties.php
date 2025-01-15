<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CrawlRepositoryDocuments
 * @property bool|null $CrawlIssue
 * @property bool|null $CrawlIssueComment
 * @property bool|null $CrawlIssueCommentAttachment
 * @property bool|null $CrawlPullRequest
 * @property bool|null $CrawlPullRequestComment
 * @property bool|null $CrawlPullRequestCommentAttachment
 */
class GitHubDocumentCrawlProperties extends Shape
{
    /**
     * @param array{
     *     CrawlRepositoryDocuments?: bool|null,
     *     CrawlIssue?: bool|null,
     *     CrawlIssueComment?: bool|null,
     *     CrawlIssueCommentAttachment?: bool|null,
     *     CrawlPullRequest?: bool|null,
     *     CrawlPullRequestComment?: bool|null,
     *     CrawlPullRequestCommentAttachment?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
