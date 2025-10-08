<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteAutomationRuleV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteAutomationRuleV2Request extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
