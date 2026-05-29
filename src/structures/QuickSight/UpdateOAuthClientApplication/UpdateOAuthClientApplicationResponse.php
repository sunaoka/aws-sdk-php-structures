<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateOAuthClientApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $OAuthClientApplicationId
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $UpdateStatus
 * @property string|null $RequestId
 * @property int|null $Status
 */
class UpdateOAuthClientApplicationResponse extends Response
{
}
