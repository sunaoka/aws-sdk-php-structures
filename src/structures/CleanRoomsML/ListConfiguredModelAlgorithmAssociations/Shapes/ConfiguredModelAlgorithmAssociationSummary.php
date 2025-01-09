<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListConfiguredModelAlgorithmAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $configuredModelAlgorithmAssociationArn
 * @property string $configuredModelAlgorithmArn
 * @property string $name
 * @property string $description
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 */
class ConfiguredModelAlgorithmAssociationSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     configuredModelAlgorithmAssociationArn: string,
     *     configuredModelAlgorithmArn: string,
     *     name: string,
     *     description?: string,
     *     membershipIdentifier: string,
     *     collaborationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
