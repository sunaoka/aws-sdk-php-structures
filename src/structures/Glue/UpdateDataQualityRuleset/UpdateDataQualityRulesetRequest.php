<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDataQualityRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Ruleset
 */
class UpdateDataQualityRulesetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Ruleset?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
