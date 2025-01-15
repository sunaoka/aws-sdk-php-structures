<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsSsmPatch|null $Patch
 */
class AwsSsmPatchComplianceDetails extends Shape
{
    /**
     * @param array{Patch?: AwsSsmPatch|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
