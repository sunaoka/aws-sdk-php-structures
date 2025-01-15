<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LoginPath
 * @property RequestInspection|null $RequestInspection
 * @property ResponseInspection|null $ResponseInspection
 * @property bool|null $EnableRegexInPath
 */
class AWSManagedRulesATPRuleSet extends Shape
{
    /**
     * @param array{
     *     LoginPath: string,
     *     RequestInspection?: RequestInspection|null,
     *     ResponseInspection?: ResponseInspection|null,
     *     EnableRegexInPath?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
