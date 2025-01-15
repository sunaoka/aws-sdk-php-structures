<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $AssociationId
 */
class DisassociateRouteTableRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     AssociationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
