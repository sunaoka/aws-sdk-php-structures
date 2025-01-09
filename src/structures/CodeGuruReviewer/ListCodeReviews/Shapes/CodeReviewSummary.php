<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $CodeReviewArn
 * @property string $RepositoryName
 * @property string $Owner
 * @property 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket' $ProviderType
 * @property 'Completed'|'Pending'|'Failed'|'Deleting' $State
 * @property \Aws\Api\DateTimeResult $CreatedTimeStamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimeStamp
 * @property 'PullRequest'|'RepositoryAnalysis' $Type
 * @property string $PullRequestId
 * @property MetricsSummary $MetricsSummary
 * @property SourceCodeType $SourceCodeType
 */
class CodeReviewSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     CodeReviewArn?: string,
     *     RepositoryName?: string,
     *     Owner?: string,
     *     ProviderType?: 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket',
     *     State?: 'Completed'|'Pending'|'Failed'|'Deleting',
     *     CreatedTimeStamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimeStamp?: \Aws\Api\DateTimeResult,
     *     Type?: 'PullRequest'|'RepositoryAnalysis',
     *     PullRequestId?: string,
     *     MetricsSummary?: MetricsSummary,
     *     SourceCodeType?: SourceCodeType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
