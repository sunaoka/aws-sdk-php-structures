<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $destination
 * @property string $prefix
 */
class BucketAccessLogConfig extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     destination?: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
