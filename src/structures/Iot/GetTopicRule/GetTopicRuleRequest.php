<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleName
 */
class GetTopicRuleRequest extends Request
{
    /**
     * @param array{ruleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
