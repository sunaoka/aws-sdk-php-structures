<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeneratedRulesType
 * @property list<string> $TargetTypes
 * @property list<string> $Targets
 */
class RuleGroupSourceListDetails extends Shape
{
    /**
     * @param array{
     *     GeneratedRulesType?: string,
     *     TargetTypes?: list<string>,
     *     Targets?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
