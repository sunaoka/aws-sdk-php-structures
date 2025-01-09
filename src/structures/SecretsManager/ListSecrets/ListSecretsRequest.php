<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecrets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $IncludePlannedDeletion
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property 'asc'|'desc' $SortOrder
 */
class ListSecretsRequest extends Request
{
    /**
     * @param array{
     *     IncludePlannedDeletion?: bool,
     *     MaxResults?: int<1, 100>,
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
