<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTrunkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BranchInterfaceId
 * @property string $TrunkInterfaceId
 * @property int $VlanId
 * @property int $GreKey
 * @property string $ClientToken
 * @property bool $DryRun
 */
class AssociateTrunkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     BranchInterfaceId: string,
     *     TrunkInterfaceId: string,
     *     VlanId?: int,
     *     GreKey?: int,
     *     ClientToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
