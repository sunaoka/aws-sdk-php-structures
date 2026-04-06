<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property ActionTarget|null $AssociationId
 * @property ActionTarget|null $NetworkAclId
 * @property bool|null $FMSCanRemediate
 */
class ReplaceNetworkAclAssociationAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     AssociationId?: ActionTarget|null,
     *     NetworkAclId?: ActionTarget|null,
     *     FMSCanRemediate?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
