<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListCodeReviews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'>|null $ProviderTypes
 * @property list<'Completed'|'Pending'|'Failed'|'Deleting'>|null $States
 * @property list<string>|null $RepositoryNames
 * @property 'PullRequest'|'RepositoryAnalysis' $Type
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCodeReviewsRequest extends Request
{
    /**
     * @param array{
     *     ProviderTypes?: list<'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'>|null,
     *     States?: list<'Completed'|'Pending'|'Failed'|'Deleting'>|null,
     *     RepositoryNames?: list<string>|null,
     *     Type: 'PullRequest'|'RepositoryAnalysis',
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
