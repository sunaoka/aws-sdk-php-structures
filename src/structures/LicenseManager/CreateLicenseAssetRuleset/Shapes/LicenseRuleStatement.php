<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseAssetRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AndRuleStatement|null $AndRuleStatement
 * @property OrRuleStatement|null $OrRuleStatement
 * @property MatchingRuleStatement|null $MatchingRuleStatement
 */
class LicenseRuleStatement extends Shape
{
    /**
     * @param array{
     *     AndRuleStatement?: AndRuleStatement|null,
     *     OrRuleStatement?: OrRuleStatement|null,
     *     MatchingRuleStatement?: MatchingRuleStatement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
