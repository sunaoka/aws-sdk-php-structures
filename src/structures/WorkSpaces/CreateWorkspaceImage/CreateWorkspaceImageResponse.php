<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaceImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ImageId
 * @property string $Name
 * @property string $Description
 * @property Shapes\OperatingSystem $OperatingSystem
 * @property 'AVAILABLE'|'PENDING'|'ERROR' $State
 * @property 'DEFAULT'|'DEDICATED' $RequiredTenancy
 * @property \Aws\Api\DateTimeResult $Created
 * @property string $OwnerAccountId
 */
class CreateWorkspaceImageResponse extends Response
{
}
