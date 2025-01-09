<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateLoggingConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $name
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 * @property 'ACTIVE' $state
 * @property array<string, string> $tags
 */
class CreateLoggingConfigurationResponse extends Response
{
}
