<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $componentVersion
 * @property \Aws\Api\DateTimeResult|null $creationTimestamp
 * @property string|null $description
 * @property string|null $publisher
 * @property list<ComponentPlatform>|null $platforms
 */
class ComponentLatestVersion extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     componentVersion?: string|null,
     *     creationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     publisher?: string|null,
     *     platforms?: list<ComponentPlatform>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
