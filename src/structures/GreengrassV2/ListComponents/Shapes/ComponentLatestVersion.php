<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $componentVersion
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property string $description
 * @property string $publisher
 * @property list<ComponentPlatform> $platforms
 */
class ComponentLatestVersion extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     componentVersion?: string,
     *     creationTimestamp?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     publisher?: string,
     *     platforms?: list<ComponentPlatform>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
