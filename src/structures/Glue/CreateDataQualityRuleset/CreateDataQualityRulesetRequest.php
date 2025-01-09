<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDataQualityRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Ruleset
 * @property array<string, string> $Tags
 * @property Shapes\DataQualityTargetTable $TargetTable
 * @property string $DataQualitySecurityConfiguration
 * @property string $ClientToken
 */
class CreateDataQualityRulesetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Ruleset: string,
     *     Tags?: array<string, string>,
     *     TargetTable?: Shapes\DataQualityTargetTable,
     *     DataQualitySecurityConfiguration?: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
