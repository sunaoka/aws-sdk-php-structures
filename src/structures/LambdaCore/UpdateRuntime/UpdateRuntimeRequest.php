<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property string|null $Description
 * @property string|null $LicenseInfo
 * @property Shapes\RuntimeReleaseLifecycle|null $ReleaseLifecycle
 */
class UpdateRuntimeRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     Description?: string|null,
     *     LicenseInfo?: string|null,
     *     ReleaseLifecycle?: Shapes\RuntimeReleaseLifecycle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
