<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Keyword
 * @property list<string>|null $Settings
 */
class RuleGroupSourceStatefulRulesOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Keyword?: string|null,
     *     Settings?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
