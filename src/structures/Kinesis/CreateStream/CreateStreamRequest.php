<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property int $ShardCount
 * @property Shapes\StreamModeDetails $StreamModeDetails
 * @property array<string, string> $Tags
 */
class CreateStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName: string,
     *     ShardCount?: int,
     *     StreamModeDetails?: Shapes\StreamModeDetails,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
