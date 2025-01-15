<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property bool|null $packageCleanup
 * @property list<string>|null $excludeAppPackagesFromCleanup
 * @property bool|null $rebootAfterUse
 */
class CreateInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     name: string,
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
