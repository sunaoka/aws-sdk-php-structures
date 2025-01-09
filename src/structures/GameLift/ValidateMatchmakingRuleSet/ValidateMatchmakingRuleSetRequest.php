<?php

namespace Sunaoka\Aws\Structures\GameLift\ValidateMatchmakingRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetBody
 */
class ValidateMatchmakingRuleSetRequest extends Request
{
    /**
     * @param array{RuleSetBody: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
