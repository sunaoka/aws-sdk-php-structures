<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FilterCondition> $FilterConditions
 * @property Shapes\SortCondition $SortCondition
 * @property string $Marker
 * @property int<min, 100> $MaxItems
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     FilterConditions?: list<Shapes\FilterCondition>,
     *     SortCondition?: Shapes\SortCondition,
     *     Marker?: string,
     *     MaxItems?: int<min, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
