<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateTopic;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TopicArn
 * @property string|null $TopicName
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null $Status
 */
class CreateTopicResponse extends Response
{
}
