<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Definition
 */
class RuleGroupVariablesIpSetsDetails extends Shape
{
    /**
     * @param array{Definition?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
