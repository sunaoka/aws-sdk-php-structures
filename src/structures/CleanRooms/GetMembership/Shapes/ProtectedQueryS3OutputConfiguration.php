<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'PARQUET' $resultFormat
 * @property string $bucket
 * @property string $keyPrefix
 * @property bool $singleFileOutput
 */
class ProtectedQueryS3OutputConfiguration extends Shape
{
    /**
     * @param array{
     *     resultFormat: 'CSV'|'PARQUET',
     *     bucket: string,
     *     keyPrefix?: string,
     *     singleFileOutput?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
