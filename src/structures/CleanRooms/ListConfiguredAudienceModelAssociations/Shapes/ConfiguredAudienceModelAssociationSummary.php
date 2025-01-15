<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListConfiguredAudienceModelAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $collaborationArn
 * @property string $collaborationId
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $configuredAudienceModelArn
 * @property string|null $description
 */
class ConfiguredAudienceModelAssociationSummary extends Shape
{
    /**
     * @param array{
     *     membershipId: string,
     *     membershipArn: string,
     *     collaborationArn: string,
     *     collaborationId: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     id: string,
     *     arn: string,
     *     name: string,
     *     configuredAudienceModelArn: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
