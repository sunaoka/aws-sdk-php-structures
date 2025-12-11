<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseAssetRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property list<LicenseAssetRule> $Rules
 * @property string $LicenseAssetRulesetArn
 */
class LicenseAssetRuleset extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Rules: list<LicenseAssetRule>,
     *     LicenseAssetRulesetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
