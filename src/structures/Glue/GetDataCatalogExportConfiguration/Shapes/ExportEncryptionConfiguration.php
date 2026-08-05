<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogExportConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SseAlgorithm
 * @property string|null $KmsKeyArn
 */
class ExportEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     SseAlgorithm?: string|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
