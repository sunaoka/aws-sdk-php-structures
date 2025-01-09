<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateMatchmakingRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RuleSetBody
 * @property list<Shapes\Tag> $Tags
 */
class CreateMatchmakingRuleSetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RuleSetBody: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
