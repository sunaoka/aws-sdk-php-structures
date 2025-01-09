<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property ActionTarget $Vpc
 * @property bool $FMSCanRemediate
 */
class CreateNetworkAclAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Vpc?: ActionTarget,
     *     FMSCanRemediate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
