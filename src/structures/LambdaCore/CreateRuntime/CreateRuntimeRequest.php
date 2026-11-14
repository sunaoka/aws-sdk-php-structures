<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateRuntime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property array<string, string>|null $Tags
 * @property string|null $Description
 * @property string|null $LicenseInfo
 * @property Shapes\RuntimeReleaseLifecycle|null $ReleaseLifecycle
 */
class CreateRuntimeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Tags?: array<string, string>|null,
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
