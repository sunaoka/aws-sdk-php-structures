<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ThemeId
 * @property string $Arn
 * @property string $VersionArn
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $CreationStatus
 * @property int $Status
 * @property string $RequestId
 */
class UpdateThemeResponse extends Response
{
}
