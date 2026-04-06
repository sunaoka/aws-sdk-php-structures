<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateLoggingConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property Shapes\DestinationConfiguration|null $destinationConfiguration
 * @property string|null $id
 * @property string|null $name
 * @property 'ACTIVE'|null $state
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updateTime
 */
class UpdateLoggingConfigurationResponse extends Response
{
}
