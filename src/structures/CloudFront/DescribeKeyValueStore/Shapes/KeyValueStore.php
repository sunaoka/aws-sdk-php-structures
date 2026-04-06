<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeKeyValueStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $Comment
 * @property string $ARN
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class KeyValueStore extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     Comment: string,
     *     ARN: string,
     *     Status?: string|null,
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
