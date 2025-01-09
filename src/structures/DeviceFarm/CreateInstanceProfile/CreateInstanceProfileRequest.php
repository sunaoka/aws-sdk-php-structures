<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property bool $packageCleanup
 * @property list<string> $excludeAppPackagesFromCleanup
 * @property bool $rebootAfterUse
 */
class CreateInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     packageCleanup?: bool,
     *     excludeAppPackagesFromCleanup?: list<string>,
     *     rebootAfterUse?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
