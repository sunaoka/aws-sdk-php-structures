<?php

namespace Sunaoka\Aws\Structures\ivschat\GetLoggingConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $name
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'ACTIVE' $state
 * @property array<string, string> $tags
 */
class GetLoggingConfigurationResponse extends Response
{
}
