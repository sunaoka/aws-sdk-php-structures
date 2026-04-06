<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\BatchDescribeEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EntityType
 * @property string|null $EntityArn
 * @property string|null $EntityIdentifier
 * @property string|null $LastModifiedDate
 * @property JsonDocumentType|null $DetailsDocument
 */
class EntityDetail extends Shape
{
    /**
     * @param array{
     *     EntityType?: string|null,
     *     EntityArn?: string|null,
     *     EntityIdentifier?: string|null,
     *     LastModifiedDate?: string|null,
     *     DetailsDocument?: JsonDocumentType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
