<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $EnableDockerAccess
 * @property list<string>|null $VpcOnlyTrustedAccounts
 * @property 'ENABLED'|'DISABLED'|null $RootlessDocker
 */
class DockerSettings extends Shape
{
    /**
     * @param array{
     *     EnableDockerAccess?: 'ENABLED'|'DISABLED'|null,
     *     VpcOnlyTrustedAccounts?: list<string>|null,
     *     RootlessDocker?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
