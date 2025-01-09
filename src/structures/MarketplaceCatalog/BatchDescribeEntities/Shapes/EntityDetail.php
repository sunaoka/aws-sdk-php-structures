<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\BatchDescribeEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntityType
 * @property string $EntityArn
 * @property string $EntityIdentifier
 * @property string $LastModifiedDate
 * @property JsonDocumentType $DetailsDocument
 */
class EntityDetail extends Shape
{
    /**
     * @param array{
     *     EntityType?: string,
     *     EntityArn?: string,
     *     EntityIdentifier?: string,
     *     LastModifiedDate?: string,
     *     DetailsDocument?: JsonDocumentType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
