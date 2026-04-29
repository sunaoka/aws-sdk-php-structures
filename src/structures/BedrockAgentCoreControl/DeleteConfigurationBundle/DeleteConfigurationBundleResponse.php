<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteConfigurationBundle;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $bundleId
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED' $status
 */
class DeleteConfigurationBundleResponse extends Response
{
}
