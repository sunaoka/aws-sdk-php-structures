<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsSsmPatch $Patch
 */
class AwsSsmPatchComplianceDetails extends Shape
{
    /**
     * @param array{Patch?: AwsSsmPatch} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
