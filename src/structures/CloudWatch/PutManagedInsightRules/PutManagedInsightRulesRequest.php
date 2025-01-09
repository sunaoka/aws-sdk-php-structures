<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutManagedInsightRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ManagedRule> $ManagedRules
 */
class PutManagedInsightRulesRequest extends Request
{
    /**
     * @param array{ManagedRules: list<Shapes\ManagedRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
