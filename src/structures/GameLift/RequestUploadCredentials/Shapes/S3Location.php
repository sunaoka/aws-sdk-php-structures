<?php

namespace Sunaoka\Aws\Structures\GameLift\RequestUploadCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property string|null $Key
 * @property string|null $RoleArn
 * @property string|null $ObjectVersion
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Key?: string|null,
     *     RoleArn?: string|null,
     *     ObjectVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
