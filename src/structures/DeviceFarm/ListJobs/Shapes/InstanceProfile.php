<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property bool $packageCleanup
 * @property list<string> $excludeAppPackagesFromCleanup
 * @property bool $rebootAfterUse
 * @property string $name
 * @property string $description
 */
class InstanceProfile extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     packageCleanup?: bool,
     *     excludeAppPackagesFromCleanup?: list<string>,
     *     rebootAfterUse?: bool,
     *     name?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
