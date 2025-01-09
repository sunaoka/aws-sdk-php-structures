<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetDataQualityRulesetRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
