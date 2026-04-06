<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $TopicId
 * @property Shapes\TopicDetails|null $Topic
 * @property string|null $RequestId
 * @property int|null $Status
 * @property Shapes\CustomInstructions|null $CustomInstructions
 */
class DescribeTopicResponse extends Response
{
}
