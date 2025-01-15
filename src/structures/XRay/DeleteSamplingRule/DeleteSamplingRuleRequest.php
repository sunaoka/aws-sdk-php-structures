<?php

namespace Sunaoka\Aws\Structures\XRay\DeleteSamplingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RuleName
 * @property string|null $RuleARN
 */
class DeleteSamplingRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleName?: string|null,
     *     RuleARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
