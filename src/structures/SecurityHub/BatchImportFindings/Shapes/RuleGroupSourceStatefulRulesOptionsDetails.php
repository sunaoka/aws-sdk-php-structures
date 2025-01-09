<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Keyword
 * @property list<string> $Settings
 */
class RuleGroupSourceStatefulRulesOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Keyword?: string,
     *     Settings?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
