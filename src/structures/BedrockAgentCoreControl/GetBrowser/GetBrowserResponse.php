<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetBrowser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $browserId
 * @property string $browserArn
 * @property string $name
 * @property string|null $description
 * @property string|null $executionRoleArn
 * @property Shapes\BrowserNetworkConfiguration $networkConfiguration
 * @property Shapes\RecordingConfig|null $recording
 * @property Shapes\BrowserSigningConfigOutput|null $browserSigning
 * @property 'CREATING'|'CREATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 * @property string|null $failureReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class GetBrowserResponse extends Response
{
}
