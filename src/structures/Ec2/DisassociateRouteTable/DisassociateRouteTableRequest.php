<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $AssociationId
 */
class DisassociateRouteTableRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     AssociationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
