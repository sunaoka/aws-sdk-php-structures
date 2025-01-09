<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ExportMetadataModelAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3ObjectKey
 * @property string $ObjectURL
 */
class ExportMetadataModelAssessmentResultEntry extends Shape
{
    /**
     * @param array{
     *     S3ObjectKey?: string,
     *     ObjectURL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
