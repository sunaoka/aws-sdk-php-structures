<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseAssetRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyToMatch
 * @property string $Constraint
 * @property list<string> $ValueToMatch
 */
class MatchingRuleStatement extends Shape
{
    /**
     * @param array{
     *     KeyToMatch: string,
     *     Constraint: string,
     *     ValueToMatch: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
