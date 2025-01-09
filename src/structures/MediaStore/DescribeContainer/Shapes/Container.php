<?php

namespace Sunaoka\Aws\Structures\MediaStore\DescribeContainer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Endpoint
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $ARN
 * @property string $Name
 * @property 'ACTIVE'|'CREATING'|'DELETING' $Status
 * @property bool $AccessLoggingEnabled
 */
class Container extends Shape
{
    /**
     * @param array{
     *     Endpoint?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     ARN?: string,
     *     Name?: string,
     *     Status?: 'ACTIVE'|'CREATING'|'DELETING',
     *     AccessLoggingEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
