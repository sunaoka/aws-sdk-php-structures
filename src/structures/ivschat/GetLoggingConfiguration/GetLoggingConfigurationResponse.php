<?php

namespace Sunaoka\Aws\Structures\ivschat\GetLoggingConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property \Aws\Api\DateTimeResult|null $updateTime
 * @property string|null $name
 * @property Shapes\DestinationConfiguration|null $destinationConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'ACTIVE'|null $state
 * @property array<string, string>|null $tags
 */
class GetLoggingConfigurationResponse extends Response
{
}
