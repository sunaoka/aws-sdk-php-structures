<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseAssetRulesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MatchingRuleStatement>|null $MatchingRuleStatements
 * @property list<ScriptRuleStatement>|null $ScriptRuleStatements
 */
class AndRuleStatement extends Shape
{
    /**
     * @param array{
     *     MatchingRuleStatements?: list<MatchingRuleStatement>|null,
     *     ScriptRuleStatements?: list<ScriptRuleStatement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
