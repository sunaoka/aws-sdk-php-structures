<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseAssetRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyToMatch
 * @property string $Script
 */
class ScriptRuleStatement extends Shape
{
    /**
     * @param array{
     *     KeyToMatch: string,
     *     Script: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
