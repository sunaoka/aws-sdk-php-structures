<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string|null $destination
 * @property string|null $prefix
 */
class BucketAccessLogConfig extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     destination?: string|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
