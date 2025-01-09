<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteMatchmakingRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteMatchmakingRuleSetRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
