<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateCustomPlugin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $customPluginArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $customPluginState
 * @property string $name
 * @property int $revision
 */
class CreateCustomPluginResponse extends Response
{
}
