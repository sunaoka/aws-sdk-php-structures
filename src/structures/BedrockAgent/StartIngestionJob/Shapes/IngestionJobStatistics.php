<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\StartIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $numberOfDocumentsDeleted
 * @property int $numberOfDocumentsFailed
 * @property int $numberOfDocumentsScanned
 * @property int $numberOfMetadataDocumentsModified
 * @property int $numberOfMetadataDocumentsScanned
 * @property int $numberOfModifiedDocumentsIndexed
 * @property int $numberOfNewDocumentsIndexed
 */
class IngestionJobStatistics extends Shape
{
    /**
     * @param array{
     *     numberOfDocumentsDeleted?: int,
     *     numberOfDocumentsFailed?: int,
     *     numberOfDocumentsScanned?: int,
     *     numberOfMetadataDocumentsModified?: int,
     *     numberOfMetadataDocumentsScanned?: int,
     *     numberOfModifiedDocumentsIndexed?: int,
     *     numberOfNewDocumentsIndexed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
