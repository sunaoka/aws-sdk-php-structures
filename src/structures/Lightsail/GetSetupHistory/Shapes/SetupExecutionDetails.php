<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetSetupHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $command
 * @property \Aws\Api\DateTimeResult $dateTime
 * @property string $name
 * @property 'succeeded'|'failed'|'inProgress' $status
 * @property string $standardError
 * @property string $standardOutput
 * @property string $version
 */
class SetupExecutionDetails extends Shape
{
    /**
     * @param array{
     *     command?: string,
     *     dateTime?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     status?: 'succeeded'|'failed'|'inProgress',
     *     standardError?: string,
     *     standardOutput?: string,
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
