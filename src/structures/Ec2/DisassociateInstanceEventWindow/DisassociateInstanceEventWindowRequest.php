<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateInstanceEventWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $InstanceEventWindowId
 * @property Shapes\InstanceEventWindowDisassociationRequest $AssociationTarget
 */
class DisassociateInstanceEventWindowRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceEventWindowId: string,
     *     AssociationTarget: Shapes\InstanceEventWindowDisassociationRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
