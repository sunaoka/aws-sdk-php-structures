<?php

namespace Sunaoka\Aws\Structures\Repostspace\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'CONFIGURED'|'UNCONFIGURED' $configurationStatus
 * @property int $contentSize
 * @property \Aws\Api\DateTimeResult $createDateTime
 * @property \Aws\Api\DateTimeResult $deleteDateTime
 * @property string $description
 * @property string $name
 * @property string $randomDomain
 * @property string $spaceId
 * @property string $status
 * @property int $storageLimit
 * @property 'BASIC'|'STANDARD' $tier
 * @property int $userCount
 * @property string $userKMSKey
 * @property string $vanityDomain
 * @property 'PENDING'|'APPROVED'|'UNAPPROVED' $vanityDomainStatus
 */
class SpaceData extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     configurationStatus: 'CONFIGURED'|'UNCONFIGURED',
     *     contentSize?: int,
     *     createDateTime: \Aws\Api\DateTimeResult,
     *     deleteDateTime?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     name: string,
     *     randomDomain: string,
     *     spaceId: string,
     *     status: string,
     *     storageLimit: int,
     *     tier: 'BASIC'|'STANDARD',
     *     userCount?: int,
     *     userKMSKey?: string,
     *     vanityDomain: string,
     *     vanityDomainStatus: 'PENDING'|'APPROVED'|'UNAPPROVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
