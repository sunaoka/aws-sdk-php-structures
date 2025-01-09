<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateInstanceEventWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $InstanceEventWindowId
 * @property Shapes\InstanceEventWindowAssociationRequest $AssociationTarget
 */
class AssociateInstanceEventWindowRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceEventWindowId: string,
     *     AssociationTarget: Shapes\InstanceEventWindowAssociationRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
