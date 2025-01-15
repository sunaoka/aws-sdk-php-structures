<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property string|null $description
 * @property bool|null $packageCleanup
 * @property list<string>|null $excludeAppPackagesFromCleanup
 * @property bool|null $rebootAfterUse
 */
class UpdateInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     description?: string|null,
     *     packageCleanup?: bool|null,
     *     excludeAppPackagesFromCleanup?: list<string>|null,
     *     rebootAfterUse?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
