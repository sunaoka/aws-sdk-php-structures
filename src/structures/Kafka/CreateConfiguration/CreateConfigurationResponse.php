<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\ConfigurationRevision|null $LatestRevision
 * @property string|null $Name
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED'|null $State
 */
class CreateConfigurationResponse extends Response
{
}
