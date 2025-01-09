<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListChangeSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<Shapes\Filter> $FilterList
 * @property Shapes\Sort $Sort
 * @property int<1, 20> $MaxResults
 * @property string $NextToken
 */
class ListChangeSetsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     FilterList?: list<Shapes\Filter>,
     *     Sort?: Shapes\Sort,
     *     MaxResults?: int<1, 20>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
