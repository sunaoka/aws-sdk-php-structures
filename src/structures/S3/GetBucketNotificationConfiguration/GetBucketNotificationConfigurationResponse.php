<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketNotificationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\TopicConfiguration>|null $TopicConfigurations
 * @property list<Shapes\QueueConfiguration>|null $QueueConfigurations
 * @property list<Shapes\LambdaFunctionConfiguration>|null $LambdaFunctionConfigurations
 * @property Shapes\EventBridgeConfiguration|null $EventBridgeConfiguration
 */
class GetBucketNotificationConfigurationResponse extends Response
{
}
