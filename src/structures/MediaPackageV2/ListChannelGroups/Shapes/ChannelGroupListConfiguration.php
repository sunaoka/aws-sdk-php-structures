<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListChannelGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelGroupName
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string $Description
 */
class ChannelGroupListConfiguration extends Shape
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     Arn: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     ModifiedAt: \Aws\Api\DateTimeResult,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
