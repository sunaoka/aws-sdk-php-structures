<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPreviewRotationShifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $NewMembers
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class PreviewOverride extends Shape
{
    /**
     * @param array{
     *     NewMembers?: list<string>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
