<?php

namespace Sunaoka\Aws\Structures\XRay\DeleteSamplingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleName
 * @property string $RuleARN
 */
class DeleteSamplingRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleName?: string,
     *     RuleARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
