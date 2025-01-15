<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FilterCondition>|null $FilterConditions
 * @property Shapes\SortCondition|null $SortCondition
 * @property string|null $Marker
 * @property int<min, 100>|null $MaxItems
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     FilterConditions?: list<Shapes\FilterCondition>|null,
     *     SortCondition?: Shapes\SortCondition|null,
     *     Marker?: string|null,
     *     MaxItems?: int<min, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
