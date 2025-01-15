<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteCustomPlugin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $customPluginArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|null $customPluginState
 */
class DeleteCustomPluginResponse extends Response
{
}
