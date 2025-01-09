<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LoginPath
 * @property RequestInspection $RequestInspection
 * @property ResponseInspection $ResponseInspection
 * @property bool $EnableRegexInPath
 */
class AWSManagedRulesATPRuleSet extends Shape
{
    /**
     * @param array{
     *     LoginPath: string,
     *     RequestInspection?: RequestInspection,
     *     ResponseInspection?: ResponseInspection,
     *     EnableRegexInPath?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
