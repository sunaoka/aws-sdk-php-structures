<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetAutomationRuleV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetAutomationRuleV2Request extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
