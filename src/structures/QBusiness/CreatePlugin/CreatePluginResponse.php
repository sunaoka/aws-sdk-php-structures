<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreatePlugin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $pluginId
 * @property string $pluginArn
 * @property 'READY'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $buildStatus
 */
class CreatePluginResponse extends Response
{
}
