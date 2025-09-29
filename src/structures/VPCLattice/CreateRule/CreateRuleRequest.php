<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 * @property string $listenerIdentifier
 * @property string $name
 * @property Shapes\RuleMatch $match
 * @property int<1, 2000> $priority
 * @property Shapes\RuleAction $action
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     serviceIdentifier: string,
     *     listenerIdentifier: string,
     *     name: string,
     *     match: Shapes\RuleMatch,
     *     priority: int<1, 2000>,
     *     action: Shapes\RuleAction,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
