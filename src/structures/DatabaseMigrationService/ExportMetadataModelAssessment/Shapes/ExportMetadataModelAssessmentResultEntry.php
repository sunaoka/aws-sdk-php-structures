<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ExportMetadataModelAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3ObjectKey
 * @property string|null $ObjectURL
 */
class ExportMetadataModelAssessmentResultEntry extends Shape
{
    /**
     * @param array{
     *     S3ObjectKey?: string|null,
     *     ObjectURL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
