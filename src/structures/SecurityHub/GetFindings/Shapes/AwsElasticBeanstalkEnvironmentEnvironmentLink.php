<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EnvironmentName
 * @property string|null $LinkName
 */
class AwsElasticBeanstalkEnvironmentEnvironmentLink extends Shape
{
    /**
     * @param array{
     *     EnvironmentName?: string|null,
     *     LinkName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
