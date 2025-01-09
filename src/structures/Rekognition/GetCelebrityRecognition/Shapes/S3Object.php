<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Name
 * @property string $Version
 */
class S3Object extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Name?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
