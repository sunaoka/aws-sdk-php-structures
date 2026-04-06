<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceRouteTableAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property bool|null $DryRun
 * @property string $RouteTableId
 */
class ReplaceRouteTableAssociationRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     DryRun?: bool|null,
     *     RouteTableId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
