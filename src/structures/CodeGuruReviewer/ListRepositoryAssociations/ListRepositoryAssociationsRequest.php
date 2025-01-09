<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRepositoryAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'> $ProviderTypes
 * @property list<'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated'> $States
 * @property list<string> $Names
 * @property list<string> $Owners
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListRepositoryAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ProviderTypes?: list<'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'>,
     *     States?: list<'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated'>,
     *     Names?: list<string>,
     *     Owners?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
