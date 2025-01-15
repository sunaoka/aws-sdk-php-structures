<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleName
 * @property Shapes\TopicRulePayload $topicRulePayload
 * @property string|null $tags
 */
class CreateTopicRuleRequest extends Request
{
    /**
     * @param array{
     *     ruleName: string,
     *     topicRulePayload: Shapes\TopicRulePayload,
     *     tags?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
