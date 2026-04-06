<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseAssetRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AndRuleStatement|null $AndRuleStatement
 * @property OrRuleStatement|null $OrRuleStatement
 * @property MatchingRuleStatement|null $MatchingRuleStatement
 * @property ScriptRuleStatement|null $ScriptRuleStatement
 */
class InstanceRuleStatement extends Shape
{
    /**
     * @param array{
     *     AndRuleStatement?: AndRuleStatement|null,
     *     OrRuleStatement?: OrRuleStatement|null,
     *     MatchingRuleStatement?: MatchingRuleStatement|null,
     *     ScriptRuleStatement?: ScriptRuleStatement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
