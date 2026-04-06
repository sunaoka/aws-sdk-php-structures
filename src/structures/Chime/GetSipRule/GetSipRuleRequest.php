<?php

namespace Sunaoka\Aws\Structures\Chime\GetSipRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipRuleId
 */
class GetSipRuleRequest extends Request
{
    /**
     * @param array{SipRuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
