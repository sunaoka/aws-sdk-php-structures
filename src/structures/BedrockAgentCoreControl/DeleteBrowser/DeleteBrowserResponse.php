<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteBrowser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $browserId
 * @property 'CREATING'|'CREATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class DeleteBrowserResponse extends Response
{
}
