<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ChannelName
 * @property string $ChannelGroupName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string|null $Description
 * @property 'HLS'|'CMAF'|null $InputType
 * @property 'EPOCH_LOCKED'|'NON_EPOCH_LOCKED'|null $OutputLockingMode
 */
class ChannelListConfiguration extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     ChannelName: string,
     *     ChannelGroupName: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     ModifiedAt: \Aws\Api\DateTimeResult,
     *     Description?: string|null,
     *     InputType?: 'HLS'|'CMAF'|null,
     *     OutputLockingMode?: 'EPOCH_LOCKED'|'NON_EPOCH_LOCKED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
