<?php

namespace Sunaoka\Aws\Structures\Iot\GetPackageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property string|null $roleArn
 */
class VersionUpdateByJobsConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
