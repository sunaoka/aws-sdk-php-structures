<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $inputName
 * @property string|null $inputDescription
 * @property string|null $inputArn
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|null $status
 */
class InputSummary extends Shape
{
    /**
     * @param array{
     *     inputName?: string|null,
     *     inputDescription?: string|null,
     *     inputArn?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
