<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceRouteTableAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $AssociationId
 * @property string $RouteTableId
 */
class ReplaceRouteTableAssociationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     AssociationId: string,
     *     RouteTableId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
