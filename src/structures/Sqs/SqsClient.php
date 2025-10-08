<?php

namespace Sunaoka\Aws\Structures\Sqs;

class SqsClient extends \Aws\Sqs\SqsClient
{
    use AddPermission\AddPermissionTrait;
    use CancelMessageMoveTask\CancelMessageMoveTaskTrait;
    use ChangeMessageVisibility\ChangeMessageVisibilityTrait;
    use ChangeMessageVisibilityBatch\ChangeMessageVisibilityBatchTrait;
    use CreateQueue\CreateQueueTrait;
    use DeleteMessage\DeleteMessageTrait;
    use DeleteMessageBatch\DeleteMessageBatchTrait;
    use DeleteQueue\DeleteQueueTrait;
    use GetQueueAttributes\GetQueueAttributesTrait;
    use GetQueueUrl\GetQueueUrlTrait;
    use ListDeadLetterSourceQueues\ListDeadLetterSourceQueuesTrait;
    use ListMessageMoveTasks\ListMessageMoveTasksTrait;
    use ListQueueTags\ListQueueTagsTrait;
    use ListQueues\ListQueuesTrait;
    use PurgeQueue\PurgeQueueTrait;
    use ReceiveMessage\ReceiveMessageTrait;
    use RemovePermission\RemovePermissionTrait;
    use SendMessage\SendMessageTrait;
    use SendMessageBatch\SendMessageBatchTrait;
    use SetQueueAttributes\SetQueueAttributesTrait;
    use StartMessageMoveTask\StartMessageMoveTaskTrait;
    use TagQueue\TagQueueTrait;
    use UntagQueue\UntagQueueTrait;
}
