<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeWorkspace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceArn
 * @property string $workspaceName
 * @property string|null $workspaceDescription
 * @property Shapes\WorkspaceStatus $workspaceStatus
 * @property Shapes\WorkspaceEncryptionConfigurationInfo|null $encryptionConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DescribeWorkspaceResponse extends Response
{
}
