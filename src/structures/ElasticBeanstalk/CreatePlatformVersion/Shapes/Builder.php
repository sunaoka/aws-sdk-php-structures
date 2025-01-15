<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreatePlatformVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ARN
 */
class Builder extends Shape
{
    /**
     * @param array{ARN?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
