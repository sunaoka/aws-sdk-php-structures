<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $EntityType
 * @property list<Shapes\Filter> $FilterList
 * @property Shapes\Sort $Sort
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 * @property 'SELF'|'SHARED' $OwnershipType
 * @property Shapes\EntityTypeFilters $EntityTypeFilters
 * @property Shapes\EntityTypeSort $EntityTypeSort
 */
class ListEntitiesRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EntityType: string,
     *     FilterList?: list<Shapes\Filter>,
     *     Sort?: Shapes\Sort,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>,
     *     OwnershipType?: 'SELF'|'SHARED',
     *     EntityTypeFilters?: Shapes\EntityTypeFilters,
     *     EntityTypeSort?: Shapes\EntityTypeSort
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
