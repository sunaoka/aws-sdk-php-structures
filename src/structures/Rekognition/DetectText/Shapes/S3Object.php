<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property string|null $Name
 * @property string|null $Version
 */
class S3Object extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Name?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
