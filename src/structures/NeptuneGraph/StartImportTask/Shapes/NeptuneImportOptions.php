<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3ExportPath
 * @property string $s3ExportKmsKeyId
 * @property bool|null $preserveDefaultVertexLabels
 * @property bool|null $preserveEdgeIds
 */
class NeptuneImportOptions extends Shape
{
    /**
     * @param array{
     *     s3ExportPath: string,
     *     s3ExportKmsKeyId: string,
     *     preserveDefaultVertexLabels?: bool|null,
     *     preserveEdgeIds?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
