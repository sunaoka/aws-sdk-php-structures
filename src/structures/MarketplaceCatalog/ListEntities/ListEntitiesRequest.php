<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $EntityType
 * @property list<Shapes\Filter>|null $FilterList
 * @property Shapes\Sort|null $Sort
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property 'SELF'|'SHARED'|null $OwnershipType
 */
class ListEntitiesRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EntityType: string,
     *     FilterList?: list<Shapes\Filter>|null,
     *     Sort?: Shapes\Sort|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     OwnershipType?: 'SELF'|'SHARED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
