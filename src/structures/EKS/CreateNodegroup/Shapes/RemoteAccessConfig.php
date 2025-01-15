<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ec2SshKey
 * @property list<string>|null $sourceSecurityGroups
 */
class RemoteAccessConfig extends Shape
{
    /**
     * @param array{
     *     ec2SshKey?: string|null,
     *     sourceSecurityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
