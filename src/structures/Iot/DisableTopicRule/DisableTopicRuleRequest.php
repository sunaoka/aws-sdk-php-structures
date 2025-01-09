<?php

namespace Sunaoka\Aws\Structures\Iot\DisableTopicRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleName
 */
class DisableTopicRuleRequest extends Request
{
    /**
     * @param array{ruleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
