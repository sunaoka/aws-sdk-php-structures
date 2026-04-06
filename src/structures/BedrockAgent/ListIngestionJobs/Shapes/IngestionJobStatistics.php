<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $numberOfDocumentsDeleted
 * @property int|null $numberOfDocumentsFailed
 * @property int|null $numberOfDocumentsScanned
 * @property int|null $numberOfMetadataDocumentsModified
 * @property int|null $numberOfMetadataDocumentsScanned
 * @property int|null $numberOfModifiedDocumentsIndexed
 * @property int|null $numberOfNewDocumentsIndexed
 */
class IngestionJobStatistics extends Shape
{
    /**
     * @param array{
     *     numberOfDocumentsDeleted?: int|null,
     *     numberOfDocumentsFailed?: int|null,
     *     numberOfDocumentsScanned?: int|null,
     *     numberOfMetadataDocumentsModified?: int|null,
     *     numberOfMetadataDocumentsScanned?: int|null,
     *     numberOfModifiedDocumentsIndexed?: int|null,
     *     numberOfNewDocumentsIndexed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
