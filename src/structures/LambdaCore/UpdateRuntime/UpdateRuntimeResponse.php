<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string|null $Description
 * @property string|null $LicenseInfo
 * @property Shapes\RuntimeReleaseLifecycle|null $ReleaseLifecycle
 * @property string $Created
 * @property string $LastModified
 */
class UpdateRuntimeResponse extends Response
{
}
