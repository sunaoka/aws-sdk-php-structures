<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $TopicId
 * @property Shapes\TopicV2Details|null $Topic
 * @property Shapes\CustomInstructions|null $CustomInstructions
 * @property int|null $Status
 * @property string|null $RequestId
 */
class DescribeTopicV2Response extends Response
{
}
