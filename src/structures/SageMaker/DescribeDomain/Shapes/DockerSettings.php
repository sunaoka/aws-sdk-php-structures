<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $EnableDockerAccess
 * @property list<string> $VpcOnlyTrustedAccounts
 */
class DockerSettings extends Shape
{
    /**
     * @param array{
     *     EnableDockerAccess?: 'ENABLED'|'DISABLED',
     *     VpcOnlyTrustedAccounts?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
