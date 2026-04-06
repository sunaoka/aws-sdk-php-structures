<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetSetupHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $command
 * @property \Aws\Api\DateTimeResult|null $dateTime
 * @property string|null $name
 * @property 'succeeded'|'failed'|'inProgress'|null $status
 * @property string|null $standardError
 * @property string|null $standardOutput
 * @property string|null $version
 */
class SetupExecutionDetails extends Shape
{
    /**
     * @param array{
     *     command?: string|null,
     *     dateTime?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     status?: 'succeeded'|'failed'|'inProgress'|null,
     *     standardError?: string|null,
     *     standardOutput?: string|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
