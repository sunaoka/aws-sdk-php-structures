<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRepositoryAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'>|null $ProviderTypes
 * @property list<'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated'>|null $States
 * @property list<string>|null $Names
 * @property list<string>|null $Owners
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRepositoryAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ProviderTypes?: list<'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'>|null,
     *     States?: list<'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated'>|null,
     *     Names?: list<string>|null,
     *     Owners?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
