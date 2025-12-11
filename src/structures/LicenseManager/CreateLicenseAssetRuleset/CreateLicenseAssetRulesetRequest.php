<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseAssetRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property list<Shapes\LicenseAssetRule> $Rules
 * @property list<Shapes\Tag>|null $Tags
 * @property string $ClientToken
 */
class CreateLicenseAssetRulesetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Rules: list<Shapes\LicenseAssetRule>,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
