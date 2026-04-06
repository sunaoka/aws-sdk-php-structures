<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $browserId
 * @property string $browserArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'CREATING'|'CREATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 */
class CreateBrowserResponse extends Response
{
}
