<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $EntityType
 * @property string|null $EntityId
 * @property string|null $EntityArn
 * @property string|null $LastModifiedDate
 * @property string|null $Visibility
 */
class EntitySummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     EntityType?: string|null,
     *     EntityId?: string|null,
     *     EntityArn?: string|null,
     *     LastModifiedDate?: string|null,
     *     Visibility?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
