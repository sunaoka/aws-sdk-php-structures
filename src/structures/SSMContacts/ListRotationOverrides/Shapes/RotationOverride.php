<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotationOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RotationOverrideId
 * @property list<string> $NewContactIds
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $CreateTime
 */
class RotationOverride extends Shape
{
    /**
     * @param array{
     *     RotationOverrideId: string,
     *     NewContactIds: list<string>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     CreateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
