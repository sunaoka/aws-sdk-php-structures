<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ec2SshKey
 * @property list<string> $sourceSecurityGroups
 */
class RemoteAccessConfig extends Shape
{
    /**
     * @param array{
     *     ec2SshKey?: string,
     *     sourceSecurityGroups?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
