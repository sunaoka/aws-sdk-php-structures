<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteDataQualityRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteDataQualityRulesetRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
