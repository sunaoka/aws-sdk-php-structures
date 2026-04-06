<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\DeletePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeletePlanRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
