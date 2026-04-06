<?php

namespace Sunaoka\Aws\Structures\Efs\CreateMountTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string $SubnetId
 * @property string|null $IpAddress
 * @property list<string>|null $SecurityGroups
 */
class CreateMountTargetRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     SubnetId: string,
     *     IpAddress?: string|null,
     *     SecurityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
