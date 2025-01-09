<?php

namespace Sunaoka\Aws\Structures\IoTEvents\PutLoggingOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property 'ERROR'|'INFO'|'DEBUG' $level
 * @property bool $enabled
 * @property list<DetectorDebugOption> $detectorDebugOptions
 */
class LoggingOptions extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     level: 'ERROR'|'INFO'|'DEBUG',
     *     enabled: bool,
     *     detectorDebugOptions?: list<DetectorDebugOption>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
