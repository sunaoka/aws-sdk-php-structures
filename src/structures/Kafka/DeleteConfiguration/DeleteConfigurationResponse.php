<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED' $State
 */
class DeleteConfigurationResponse extends Response
{
}
