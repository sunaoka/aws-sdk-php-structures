<?php

namespace Sunaoka\Aws\Structures\Repostspace\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'CONFIGURED'|'UNCONFIGURED' $configurationStatus
 * @property int|null $contentSize
 * @property \Aws\Api\DateTimeResult $createDateTime
 * @property \Aws\Api\DateTimeResult|null $deleteDateTime
 * @property string|null $description
 * @property string $name
 * @property string $randomDomain
 * @property string $spaceId
 * @property string $status
 * @property int $storageLimit
 * @property 'BASIC'|'STANDARD' $tier
 * @property int|null $userCount
 * @property string|null $userKMSKey
 * @property string $vanityDomain
 * @property 'PENDING'|'APPROVED'|'UNAPPROVED' $vanityDomainStatus
 */
class SpaceData extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     configurationStatus: 'CONFIGURED'|'UNCONFIGURED',
     *     contentSize?: int|null,
     *     createDateTime: \Aws\Api\DateTimeResult,
     *     deleteDateTime?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     name: string,
     *     randomDomain: string,
     *     spaceId: string,
     *     status: string,
     *     storageLimit: int,
     *     tier: 'BASIC'|'STANDARD',
     *     userCount?: int|null,
     *     userKMSKey?: string|null,
     *     vanityDomain: string,
     *     vanityDomainStatus: 'PENDING'|'APPROVED'|'UNAPPROVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
