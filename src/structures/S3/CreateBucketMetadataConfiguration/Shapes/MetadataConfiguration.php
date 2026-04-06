<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucketMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JournalTableConfiguration $JournalTableConfiguration
 * @property InventoryTableConfiguration|null $InventoryTableConfiguration
 */
class MetadataConfiguration extends Shape
{
    /**
     * @param array{
     *     JournalTableConfiguration: JournalTableConfiguration,
     *     InventoryTableConfiguration?: InventoryTableConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
