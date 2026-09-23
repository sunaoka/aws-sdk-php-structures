<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleIdentifier
 */
class GetRuleRequest extends Request
{
    /**
     * @param array{ruleIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
