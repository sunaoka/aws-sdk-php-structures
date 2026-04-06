<?php

namespace Sunaoka\Aws\Structures\Repostspace\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spaceId
 * @property string $arn
 * @property string $name
 * @property string|null $description
 * @property string $status
 * @property 'CONFIGURED'|'UNCONFIGURED' $configurationStatus
 * @property 'PENDING'|'APPROVED'|'UNAPPROVED' $vanityDomainStatus
 * @property string $vanityDomain
 * @property string $randomDomain
 * @property 'BASIC'|'STANDARD' $tier
 * @property int $storageLimit
 * @property \Aws\Api\DateTimeResult $createDateTime
 * @property \Aws\Api\DateTimeResult|null $deleteDateTime
 * @property string|null $userKMSKey
 * @property int|null $userCount
 * @property int|null $contentSize
 * @property SupportedEmailDomainsStatus|null $supportedEmailDomains
 */
class SpaceData extends Shape
{
    /**
     * @param array{
     *     spaceId: string,
     *     arn: string,
     *     name: string,
     *     description?: string|null,
     *     status: string,
     *     configurationStatus: 'CONFIGURED'|'UNCONFIGURED',
     *     vanityDomainStatus: 'PENDING'|'APPROVED'|'UNAPPROVED',
     *     vanityDomain: string,
     *     randomDomain: string,
     *     tier: 'BASIC'|'STANDARD',
     *     storageLimit: int,
     *     createDateTime: \Aws\Api\DateTimeResult,
     *     deleteDateTime?: \Aws\Api\DateTimeResult|null,
     *     userKMSKey?: string|null,
     *     userCount?: int|null,
     *     contentSize?: int|null,
     *     supportedEmailDomains?: SupportedEmailDomainsStatus|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
