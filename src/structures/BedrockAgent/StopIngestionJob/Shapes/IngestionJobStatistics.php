<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\StopIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $numberOfDocumentsScanned
 * @property int|null $numberOfMetadataDocumentsScanned
 * @property int|null $numberOfNewDocumentsIndexed
 * @property int|null $numberOfModifiedDocumentsIndexed
 * @property int|null $numberOfMetadataDocumentsModified
 * @property int|null $numberOfDocumentsDeleted
 * @property int|null $numberOfDocumentsFailed
 */
class IngestionJobStatistics extends Shape
{
    /**
     * @param array{
     *     numberOfDocumentsScanned?: int|null,
     *     numberOfMetadataDocumentsScanned?: int|null,
     *     numberOfNewDocumentsIndexed?: int|null,
     *     numberOfModifiedDocumentsIndexed?: int|null,
     *     numberOfMetadataDocumentsModified?: int|null,
     *     numberOfDocumentsDeleted?: int|null,
     *     numberOfDocumentsFailed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
