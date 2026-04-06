<?php

namespace Sunaoka\Aws\Structures\DataZone\PutDataExportConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyArn
 * @property string|null $sseAlgorithm
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyArn?: string|null,
     *     sseAlgorithm?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
