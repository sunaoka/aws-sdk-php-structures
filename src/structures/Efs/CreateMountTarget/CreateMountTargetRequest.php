<?php

namespace Sunaoka\Aws\Structures\Efs\CreateMountTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string $SubnetId
 * @property string $IpAddress
 * @property list<string> $SecurityGroups
 */
class CreateMountTargetRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     SubnetId: string,
     *     IpAddress?: string,
     *     SecurityGroups?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
