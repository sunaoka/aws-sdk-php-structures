<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $EnableDockerAccess
 * @property list<string>|null $VpcOnlyTrustedAccounts
 */
class DockerSettings extends Shape
{
    /**
     * @param array{
     *     EnableDockerAccess?: 'ENABLED'|'DISABLED'|null,
     *     VpcOnlyTrustedAccounts?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
