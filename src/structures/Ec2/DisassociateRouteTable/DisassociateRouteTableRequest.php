<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property bool|null $DryRun
 */
class DisassociateRouteTableRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
