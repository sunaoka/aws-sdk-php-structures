<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetRuntime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string|null $Description
 * @property string|null $LicenseInfo
 * @property Shapes\RuntimeReleaseLifecycle|null $ReleaseLifecycle
 * @property 'ACTIVE'|'PENDING_DELETION'|'DELETING'|'FAILED'|null $State
 * @property string|null $PendingDeletionAt
 * @property string $Created
 * @property string $LastModified
 * @property string|null $Id
 */
class GetRuntimeResponse extends Response
{
}
