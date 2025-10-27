<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property int<1, max>|null $ShardCount
 * @property Shapes\StreamModeDetails|null $StreamModeDetails
 * @property array<string, string>|null $Tags
 * @property int<1024, 10240>|null $MaxRecordSizeInKiB
 */
class CreateStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName: string,
     *     ShardCount?: int<1, max>|null,
     *     StreamModeDetails?: Shapes\StreamModeDetails|null,
     *     Tags?: array<string, string>|null,
     *     MaxRecordSizeInKiB?: int<1024, 10240>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
