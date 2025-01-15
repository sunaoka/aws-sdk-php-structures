<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDataQualityRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $Ruleset
 */
class UpdateDataQualityRulesetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Ruleset?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
