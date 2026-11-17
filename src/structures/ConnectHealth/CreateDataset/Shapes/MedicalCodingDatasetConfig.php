<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3InputPath
 * @property string $s3OutputPath
 */
class MedicalCodingDatasetConfig extends Shape
{
    /**
     * @param array{
     *     s3InputPath: string,
     *     s3OutputPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
