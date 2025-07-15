<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property Shapes\TopicDetails $Topic
 * @property Shapes\CustomInstructions|null $CustomInstructions
 */
class UpdateTopicRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     Topic: Shapes\TopicDetails,
     *     CustomInstructions?: Shapes\CustomInstructions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
