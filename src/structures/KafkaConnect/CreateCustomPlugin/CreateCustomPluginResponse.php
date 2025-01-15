<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateCustomPlugin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $customPluginArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|null $customPluginState
 * @property string|null $name
 * @property int|null $revision
 */
class CreateCustomPluginResponse extends Response
{
}
