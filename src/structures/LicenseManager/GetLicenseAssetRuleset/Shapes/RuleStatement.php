<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseAssetRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LicenseConfigurationRuleStatement|null $LicenseConfigurationRuleStatement
 * @property LicenseRuleStatement|null $LicenseRuleStatement
 * @property InstanceRuleStatement|null $InstanceRuleStatement
 */
class RuleStatement extends Shape
{
    /**
     * @param array{
     *     LicenseConfigurationRuleStatement?: LicenseConfigurationRuleStatement|null,
     *     LicenseRuleStatement?: LicenseRuleStatement|null,
     *     InstanceRuleStatement?: InstanceRuleStatement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
