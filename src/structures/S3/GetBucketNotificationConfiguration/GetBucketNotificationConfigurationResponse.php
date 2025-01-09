<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketNotificationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\TopicConfiguration> $TopicConfigurations
 * @property list<Shapes\QueueConfiguration> $QueueConfigurations
 * @property list<Shapes\LambdaFunctionConfiguration> $LambdaFunctionConfigurations
 * @property Shapes\EventBridgeConfiguration $EventBridgeConfiguration
 */
class GetBucketNotificationConfigurationResponse extends Response
{
}
