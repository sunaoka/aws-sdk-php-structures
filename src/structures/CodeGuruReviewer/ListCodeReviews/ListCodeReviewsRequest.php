<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListCodeReviews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'> $ProviderTypes
 * @property list<'Completed'|'Pending'|'Failed'|'Deleting'> $States
 * @property list<string> $RepositoryNames
 * @property 'PullRequest'|'RepositoryAnalysis' $Type
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListCodeReviewsRequest extends Request
{
    /**
     * @param array{
     *     ProviderTypes?: list<'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'>,
     *     States?: list<'Completed'|'Pending'|'Failed'|'Deleting'>,
     *     RepositoryNames?: list<string>,
     *     Type: 'PullRequest'|'RepositoryAnalysis',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
