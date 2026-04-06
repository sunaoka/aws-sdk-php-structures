<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredAudienceModelAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $configuredAudienceModelArn
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $name
 * @property bool $manageResourcePolicies
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class ConfiguredAudienceModelAssociation extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     configuredAudienceModelArn: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     name: string,
     *     manageResourcePolicies: bool,
     *     description?: string|null,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
