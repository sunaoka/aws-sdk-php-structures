<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTrunkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BranchInterfaceId
 * @property string $TrunkInterfaceId
 * @property int|null $VlanId
 * @property int|null $GreKey
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class AssociateTrunkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     BranchInterfaceId: string,
     *     TrunkInterfaceId: string,
     *     VlanId?: int|null,
     *     GreKey?: int|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
