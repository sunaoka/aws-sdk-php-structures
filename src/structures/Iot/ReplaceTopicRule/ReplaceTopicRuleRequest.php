<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleName
 * @property Shapes\TopicRulePayload $topicRulePayload
 */
class ReplaceTopicRuleRequest extends Request
{
    /**
     * @param array{
     *     ruleName: string,
     *     topicRulePayload: Shapes\TopicRulePayload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
