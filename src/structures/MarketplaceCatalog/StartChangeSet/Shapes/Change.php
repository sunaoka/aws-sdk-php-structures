<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\StartChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChangeType
 * @property Entity $Entity
 * @property list<Tag>|null $EntityTags
 * @property string $Details
 * @property string|null $ChangeName
 */
class Change extends Shape
{
    /**
     * @param array{
     *     ChangeType: string,
     *     Entity: Entity,
     *     EntityTags?: list<Tag>|null,
     *     Details: string,
     *     ChangeName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
