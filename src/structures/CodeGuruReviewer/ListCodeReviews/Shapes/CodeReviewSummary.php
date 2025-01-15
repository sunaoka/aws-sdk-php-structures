<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $CodeReviewArn
 * @property string|null $RepositoryName
 * @property string|null $Owner
 * @property 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'|null $ProviderType
 * @property 'Completed'|'Pending'|'Failed'|'Deleting'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreatedTimeStamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimeStamp
 * @property 'PullRequest'|'RepositoryAnalysis'|null $Type
 * @property string|null $PullRequestId
 * @property MetricsSummary|null $MetricsSummary
 * @property SourceCodeType|null $SourceCodeType
 */
class CodeReviewSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     CodeReviewArn?: string|null,
     *     RepositoryName?: string|null,
     *     Owner?: string|null,
     *     ProviderType?: 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'|null,
     *     State?: 'Completed'|'Pending'|'Failed'|'Deleting'|null,
     *     CreatedTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'PullRequest'|'RepositoryAnalysis'|null,
     *     PullRequestId?: string|null,
     *     MetricsSummary?: MetricsSummary|null,
     *     SourceCodeType?: SourceCodeType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
