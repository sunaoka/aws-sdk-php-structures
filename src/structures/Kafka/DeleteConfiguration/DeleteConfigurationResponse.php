<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED'|null $State
 */
class DeleteConfigurationResponse extends Response
{
}
