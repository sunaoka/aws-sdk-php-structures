<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GeneratedRulesType
 * @property list<string>|null $TargetTypes
 * @property list<string>|null $Targets
 */
class RuleGroupSourceListDetails extends Shape
{
    /**
     * @param array{
     *     GeneratedRulesType?: string|null,
     *     TargetTypes?: list<string>|null,
     *     Targets?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
