<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePresignedDomainUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 * @property int<1800, 43200> $SessionExpirationDurationInSeconds
 * @property int<5, 300> $ExpiresInSeconds
 * @property string $SpaceName
 * @property string $LandingUri
 */
class CreatePresignedDomainUrlRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName: string,
     *     SessionExpirationDurationInSeconds?: int<1800, 43200>,
     *     ExpiresInSeconds?: int<5, 300>,
     *     SpaceName?: string,
     *     LandingUri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
