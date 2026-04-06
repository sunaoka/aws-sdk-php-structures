<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property ActionTarget|null $Vpc
 * @property bool|null $FMSCanRemediate
 */
class CreateNetworkAclAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Vpc?: ActionTarget|null,
     *     FMSCanRemediate?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
