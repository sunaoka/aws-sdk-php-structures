<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateLoggerDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GreengrassSystem'|'Lambda' $Component
 * @property string $Id
 * @property 'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL' $Level
 * @property int $Space
 * @property 'FileSystem'|'AWSCloudWatch' $Type
 */
class Logger extends Shape
{
    /**
     * @param array{
     *     Component: 'GreengrassSystem'|'Lambda',
     *     Id: string,
     *     Level: 'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL',
     *     Space?: int,
     *     Type: 'FileSystem'|'AWSCloudWatch'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
