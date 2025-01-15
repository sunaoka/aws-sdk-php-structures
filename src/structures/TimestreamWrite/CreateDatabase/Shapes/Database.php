<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $DatabaseName
 * @property int|null $TableCount
 * @property string|null $KmsKeyId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class Database extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     DatabaseName?: string|null,
     *     TableCount?: int|null,
     *     KmsKeyId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
