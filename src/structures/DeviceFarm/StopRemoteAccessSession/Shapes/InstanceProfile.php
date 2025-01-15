<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRemoteAccessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property bool|null $packageCleanup
 * @property list<string>|null $excludeAppPackagesFromCleanup
 * @property bool|null $rebootAfterUse
 * @property string|null $name
 * @property string|null $description
 */
class InstanceProfile extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     packageCleanup?: bool|null,
     *     excludeAppPackagesFromCleanup?: list<string>|null,
     *     rebootAfterUse?: bool|null,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
