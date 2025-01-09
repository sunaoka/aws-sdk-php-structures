<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RuleAction $action
 * @property string $clientToken
 * @property string $listenerIdentifier
 * @property Shapes\RuleMatch $match
 * @property string $name
 * @property int<1, 100> $priority
 * @property string $serviceIdentifier
 * @property array<string, string> $tags
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     action: Shapes\RuleAction,
     *     clientToken?: string,
     *     listenerIdentifier: string,
     *     match: Shapes\RuleMatch,
     *     name: string,
     *     priority: int<1, 100>,
     *     serviceIdentifier: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
