<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListMLInputChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property string $name
 * @property list<string> $configuredModelAlgorithmAssociations
 * @property string $protectedQueryIdentifier
 * @property string $mlInputChannelArn
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE' $status
 * @property string $description
 */
class MLInputChannelSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     membershipIdentifier: string,
     *     collaborationIdentifier: string,
     *     name: string,
     *     configuredModelAlgorithmAssociations: list<string>,
     *     protectedQueryIdentifier?: string,
     *     mlInputChannelArn: string,
     *     status: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE',
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
