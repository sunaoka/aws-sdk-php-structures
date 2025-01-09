<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\DeleteResponsePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteResponsePlanRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
