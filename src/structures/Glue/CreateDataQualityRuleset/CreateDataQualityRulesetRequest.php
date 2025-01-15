<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDataQualityRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $Ruleset
 * @property array<string, string>|null $Tags
 * @property Shapes\DataQualityTargetTable|null $TargetTable
 * @property string|null $DataQualitySecurityConfiguration
 * @property string|null $ClientToken
 */
class CreateDataQualityRulesetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Ruleset: string,
     *     Tags?: array<string, string>|null,
     *     TargetTable?: Shapes\DataQualityTargetTable|null,
     *     DataQualitySecurityConfiguration?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
