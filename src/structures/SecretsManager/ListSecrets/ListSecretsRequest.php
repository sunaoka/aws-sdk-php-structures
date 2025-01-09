<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecrets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $IncludePlannedDeletion
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property 'asc'|'desc' $SortOrder
 */
class ListSecretsRequest extends Request
{
    /**
     * @param array{
     *     IncludePlannedDeletion?: bool,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     SortOrder?: 'asc'|'desc'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
