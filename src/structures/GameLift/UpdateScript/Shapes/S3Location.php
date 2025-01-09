<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateScript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $RoleArn
 * @property string $ObjectVersion
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Key?: string,
     *     RoleArn?: string,
     *     ObjectVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
