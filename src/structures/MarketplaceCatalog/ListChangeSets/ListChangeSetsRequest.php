<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListChangeSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<Shapes\Filter>|null $FilterList
 * @property Shapes\Sort|null $Sort
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 */
class ListChangeSetsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     FilterList?: list<Shapes\Filter>|null,
     *     Sort?: Shapes\Sort|null,
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
