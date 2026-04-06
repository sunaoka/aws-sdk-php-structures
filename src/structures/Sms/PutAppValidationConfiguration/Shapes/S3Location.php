<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $key
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
