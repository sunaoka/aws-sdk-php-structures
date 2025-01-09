<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\StartChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChangeType
 * @property Entity $Entity
 * @property list<Tag> $EntityTags
 * @property string $Details
 * @property JsonDocumentType $DetailsDocument
 * @property string $ChangeName
 */
class Change extends Shape
{
    /**
     * @param array{
     *     ChangeType: string,
     *     Entity: Entity,
     *     EntityTags?: list<Tag>,
     *     Details?: string,
     *     DetailsDocument?: JsonDocumentType,
     *     ChangeName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
