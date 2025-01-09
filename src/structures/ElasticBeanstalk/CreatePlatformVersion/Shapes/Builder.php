<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreatePlatformVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 */
class Builder extends Shape
{
    /**
     * @param array{ARN?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
