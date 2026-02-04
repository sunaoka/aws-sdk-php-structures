<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateShardCount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property int<1, max> $TargetShardCount
 * @property 'UNIFORM_SCALING' $ScalingType
 * @property string|null $StreamARN
 * @property string|null $StreamId
 */
class UpdateShardCountRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     TargetShardCount: int<1, max>,
     *     ScalingType: 'UNIFORM_SCALING',
     *     StreamARN?: string|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
