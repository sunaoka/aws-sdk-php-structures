<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteTopic;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TopicArn
 * @property string|null $TopicName
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null $Status
 */
class DeleteTopicResponse extends Response
{
}
