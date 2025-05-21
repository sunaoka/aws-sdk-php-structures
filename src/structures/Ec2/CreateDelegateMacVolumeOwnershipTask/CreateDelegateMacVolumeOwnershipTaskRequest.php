<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDelegateMacVolumeOwnershipTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property string $InstanceId
 * @property string $MacCredentials
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateDelegateMacVolumeOwnershipTaskRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     InstanceId: string,
     *     MacCredentials: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
