<?php

namespace Sunaoka\Aws\Structures\Iot\EnableTopicRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleName
 */
class EnableTopicRuleRequest extends Request
{
    /**
     * @param array{ruleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
