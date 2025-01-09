<?php

namespace Sunaoka\Aws\Structures\Iot\GetPackageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $roleArn
 */
class VersionUpdateByJobsConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
