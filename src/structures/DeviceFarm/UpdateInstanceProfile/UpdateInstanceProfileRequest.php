<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property bool $packageCleanup
 * @property list<string> $excludeAppPackagesFromCleanup
 * @property bool $rebootAfterUse
 */
class UpdateInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
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
