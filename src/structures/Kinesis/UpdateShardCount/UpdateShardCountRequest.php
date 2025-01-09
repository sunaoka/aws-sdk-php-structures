<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateShardCount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property int $TargetShardCount
 * @property 'UNIFORM_SCALING' $ScalingType
 * @property string $StreamARN
 */
class UpdateShardCountRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     TargetShardCount: int,
     *     ScalingType: 'UNIFORM_SCALING',
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
