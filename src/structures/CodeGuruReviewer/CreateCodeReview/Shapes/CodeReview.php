<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $CodeReviewArn
 * @property string $RepositoryName
 * @property string $Owner
 * @property 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket' $ProviderType
 * @property 'Completed'|'Pending'|'Failed'|'Deleting' $State
 * @property string $StateReason
 * @property \Aws\Api\DateTimeResult $CreatedTimeStamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimeStamp
 * @property 'PullRequest'|'RepositoryAnalysis' $Type
 * @property string $PullRequestId
 * @property SourceCodeType $SourceCodeType
 * @property string $AssociationArn
 * @property Metrics $Metrics
 * @property list<'Security'|'CodeQuality'> $AnalysisTypes
 * @property 'Present'|'Absent'|'PresentWithErrors' $ConfigFileState
 */
class CodeReview extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     CodeReviewArn?: string,
     *     RepositoryName?: string,
     *     Owner?: string,
     *     ProviderType?: 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket',
     *     State?: 'Completed'|'Pending'|'Failed'|'Deleting',
     *     StateReason?: string,
     *     CreatedTimeStamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimeStamp?: \Aws\Api\DateTimeResult,
     *     Type?: 'PullRequest'|'RepositoryAnalysis',
     *     PullRequestId?: string,
     *     SourceCodeType?: SourceCodeType,
     *     AssociationArn?: string,
     *     Metrics?: Metrics,
     *     AnalysisTypes?: list<'Security'|'CodeQuality'>,
     *     ConfigFileState?: 'Present'|'Absent'|'PresentWithErrors'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
