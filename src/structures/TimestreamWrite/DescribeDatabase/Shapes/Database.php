<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $DatabaseName
 * @property int $TableCount
 * @property string $KmsKeyId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class Database extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     DatabaseName?: string,
     *     TableCount?: int,
     *     KmsKeyId?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
