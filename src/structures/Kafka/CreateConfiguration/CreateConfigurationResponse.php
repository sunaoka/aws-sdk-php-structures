<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\ConfigurationRevision $LatestRevision
 * @property string $Name
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED' $State
 */
class CreateConfigurationResponse extends Response
{
}
