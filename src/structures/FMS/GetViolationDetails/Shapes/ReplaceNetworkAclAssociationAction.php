<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property ActionTarget $AssociationId
 * @property ActionTarget $NetworkAclId
 * @property bool $FMSCanRemediate
 */
class ReplaceNetworkAclAssociationAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     AssociationId?: ActionTarget,
     *     NetworkAclId?: ActionTarget,
     *     FMSCanRemediate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
