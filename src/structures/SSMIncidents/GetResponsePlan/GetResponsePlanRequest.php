<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetResponsePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetResponsePlanRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
