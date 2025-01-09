<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListLoggerDefinitionVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CreationTimestamp
 * @property string $Id
 * @property string $Version
 */
class VersionInformation extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreationTimestamp?: string,
     *     Id?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
