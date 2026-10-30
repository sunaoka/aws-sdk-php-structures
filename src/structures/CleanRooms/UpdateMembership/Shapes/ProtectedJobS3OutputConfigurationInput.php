<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'PARQUET'|null $resultFormat
 * @property string $bucket
 * @property string|null $keyPrefix
 */
class ProtectedJobS3OutputConfigurationInput extends Shape
{
    /**
     * @param array{
     *     resultFormat?: 'CSV'|'PARQUET'|null,
     *     bucket: string,
     *     keyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
