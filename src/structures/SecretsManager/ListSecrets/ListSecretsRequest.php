<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecrets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $IncludePlannedDeletion
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 * @property 'asc'|'desc'|null $SortOrder
 */
class ListSecretsRequest extends Request
{
    /**
     * @param array{
     *     IncludePlannedDeletion?: bool|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     SortOrder?: 'asc'|'desc'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
