<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property int<1, max>|null $ShardCount
 * @property Shapes\StreamModeDetails|null $StreamModeDetails
 */
class CreateStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName: string,
     *     ShardCount?: int<1, max>|null,
     *     StreamModeDetails?: Shapes\StreamModeDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
