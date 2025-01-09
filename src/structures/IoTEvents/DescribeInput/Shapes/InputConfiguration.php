<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputName
 * @property string $inputDescription
 * @property string $inputArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING' $status
 */
class InputConfiguration extends Shape
{
    /**
     * @param array{
     *     inputName: string,
     *     inputDescription?: string,
     *     inputArn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastUpdateTime: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
