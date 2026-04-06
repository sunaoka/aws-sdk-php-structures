<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseAssetRulesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleStatement $RuleStatement
 */
class LicenseAssetRule extends Shape
{
    /**
     * @param array{RuleStatement: RuleStatement} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
