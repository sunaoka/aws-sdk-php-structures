<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EnvironmentName
 * @property string $LinkName
 */
class AwsElasticBeanstalkEnvironmentEnvironmentLink extends Shape
{
    /**
     * @param array{
     *     EnvironmentName?: string,
     *     LinkName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
