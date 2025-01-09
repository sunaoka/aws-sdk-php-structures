<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetCustomRulePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 */
class GetCustomRulePolicyRequest extends Request
{
    /**
     * @param array{ConfigRuleName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
