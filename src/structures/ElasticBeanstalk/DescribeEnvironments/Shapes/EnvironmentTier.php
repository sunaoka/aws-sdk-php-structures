<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Type
 * @property string $Version
 */
class EnvironmentTier extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
