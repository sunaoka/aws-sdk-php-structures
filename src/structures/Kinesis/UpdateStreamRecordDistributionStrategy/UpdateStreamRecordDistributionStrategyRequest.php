<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateStreamRecordDistributionStrategy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string|null $StreamId
 * @property 'AUTO'|'USER_PARTITION_KEY' $RecordDistributionStrategy
 */
class UpdateStreamRecordDistributionStrategyRequest extends Request
{
    /**
     * @param array{
     *     StreamARN: string,
     *     StreamId?: string|null,
     *     RecordDistributionStrategy: 'AUTO'|'USER_PARTITION_KEY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
