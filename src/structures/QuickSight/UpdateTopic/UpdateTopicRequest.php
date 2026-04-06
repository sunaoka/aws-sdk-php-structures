<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property Shapes\TopicDetails $Topic
 */
class UpdateTopicRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     Topic: Shapes\TopicDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
