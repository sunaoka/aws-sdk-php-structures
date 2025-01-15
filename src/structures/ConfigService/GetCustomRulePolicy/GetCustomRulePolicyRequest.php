<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetCustomRulePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ConfigRuleName
 */
class GetCustomRulePolicyRequest extends Request
{
    /**
     * @param array{ConfigRuleName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
