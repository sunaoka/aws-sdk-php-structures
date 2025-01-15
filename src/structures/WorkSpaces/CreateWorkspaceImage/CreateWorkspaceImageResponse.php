<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaceImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ImageId
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\OperatingSystem|null $OperatingSystem
 * @property 'AVAILABLE'|'PENDING'|'ERROR'|null $State
 * @property 'DEFAULT'|'DEDICATED'|null $RequiredTenancy
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property string|null $OwnerAccountId
 */
class CreateWorkspaceImageResponse extends Response
{
}
