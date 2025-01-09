<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateInferenceScheduler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Prefix
 */
class InferenceS3OutputConfiguration extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
