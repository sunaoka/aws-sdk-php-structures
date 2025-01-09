<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $type
 * @property string $value
 */
class ResourceRecord extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     type?: string,
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
