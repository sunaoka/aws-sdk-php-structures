<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateSamplingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SamplingRuleUpdate $SamplingRuleUpdate
 */
class UpdateSamplingRuleRequest extends Request
{
    /**
     * @param array{SamplingRuleUpdate: Shapes\SamplingRuleUpdate} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
