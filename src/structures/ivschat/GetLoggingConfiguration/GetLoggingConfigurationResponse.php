<?php

namespace Sunaoka\Aws\Structures\ivschat\GetLoggingConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property Shapes\DestinationConfiguration|null $destinationConfiguration
 * @property string|null $id
 * @property string|null $name
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'ACTIVE'|null $state
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updateTime
 */
class GetLoggingConfigurationResponse extends Response
{
}
