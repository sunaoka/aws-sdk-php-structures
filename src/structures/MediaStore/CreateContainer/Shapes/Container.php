<?php

namespace Sunaoka\Aws\Structures\MediaStore\CreateContainer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Endpoint
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $ARN
 * @property string|null $Name
 * @property 'ACTIVE'|'CREATING'|'DELETING'|null $Status
 * @property bool|null $AccessLoggingEnabled
 */
class Container extends Shape
{
    /**
     * @param array{
     *     Endpoint?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ARN?: string|null,
     *     Name?: string|null,
     *     Status?: 'ACTIVE'|'CREATING'|'DELETING'|null,
     *     AccessLoggingEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
