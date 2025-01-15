<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $CodeReviewArn
 * @property string|null $RepositoryName
 * @property string|null $Owner
 * @property 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'|null $ProviderType
 * @property 'Completed'|'Pending'|'Failed'|'Deleting'|null $State
 * @property string|null $StateReason
 * @property \Aws\Api\DateTimeResult|null $CreatedTimeStamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimeStamp
 * @property 'PullRequest'|'RepositoryAnalysis'|null $Type
 * @property string|null $PullRequestId
 * @property SourceCodeType|null $SourceCodeType
 * @property string|null $AssociationArn
 * @property Metrics|null $Metrics
 * @property list<'Security'|'CodeQuality'>|null $AnalysisTypes
 * @property 'Present'|'Absent'|'PresentWithErrors'|null $ConfigFileState
 */
class CodeReview extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     CodeReviewArn?: string|null,
     *     RepositoryName?: string|null,
     *     Owner?: string|null,
     *     ProviderType?: 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'|null,
     *     State?: 'Completed'|'Pending'|'Failed'|'Deleting'|null,
     *     StateReason?: string|null,
     *     CreatedTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'PullRequest'|'RepositoryAnalysis'|null,
     *     PullRequestId?: string|null,
     *     SourceCodeType?: SourceCodeType|null,
     *     AssociationArn?: string|null,
     *     Metrics?: Metrics|null,
     *     AnalysisTypes?: list<'Security'|'CodeQuality'>|null,
     *     ConfigFileState?: 'Present'|'Absent'|'PresentWithErrors'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
