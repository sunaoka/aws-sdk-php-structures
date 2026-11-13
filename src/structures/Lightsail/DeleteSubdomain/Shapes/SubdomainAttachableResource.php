<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteSubdomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $attachedAt
 */
class SubdomainAttachableResource extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     attachedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
