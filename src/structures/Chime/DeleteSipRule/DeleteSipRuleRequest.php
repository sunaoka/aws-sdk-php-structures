<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteSipRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipRuleId
 */
class DeleteSipRuleRequest extends Request
{
    /**
     * @param array{SipRuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
