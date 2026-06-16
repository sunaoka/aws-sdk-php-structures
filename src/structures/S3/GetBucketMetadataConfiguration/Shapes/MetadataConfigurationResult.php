<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DestinationResult $DestinationResult
 * @property JournalTableConfigurationResult|null $JournalTableConfigurationResult
 * @property InventoryTableConfigurationResult|null $InventoryTableConfigurationResult
 * @property AnnotationTableConfigurationResult|null $AnnotationTableConfigurationResult
 */
class MetadataConfigurationResult extends Shape
{
    /**
     * @param array{
     *     DestinationResult: DestinationResult,
     *     JournalTableConfigurationResult?: JournalTableConfigurationResult|null,
     *     InventoryTableConfigurationResult?: InventoryTableConfigurationResult|null,
     *     AnnotationTableConfigurationResult?: AnnotationTableConfigurationResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
