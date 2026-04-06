<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationConfiguredModelAlgorithmAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $configuredModelAlgorithmAssociationArn
 * @property string $name
 * @property string|null $description
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property string $configuredModelAlgorithmArn
 * @property string $creatorAccountId
 */
class CollaborationConfiguredModelAlgorithmAssociationSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     configuredModelAlgorithmAssociationArn: string,
     *     name: string,
     *     description?: string|null,
     *     membershipIdentifier: string,
     *     collaborationIdentifier: string,
     *     configuredModelAlgorithmArn: string,
     *     creatorAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
