<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateWorldTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Bucket
 * @property string $s3Key
 */
class TemplateLocation extends Shape
{
    /**
     * @param array{
     *     s3Bucket: string,
     *     s3Key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
