<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteTopicRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleName
 */
class DeleteTopicRuleRequest extends Request
{
    /**
     * @param array{ruleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
