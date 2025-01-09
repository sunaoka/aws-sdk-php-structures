<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePresignedDomainUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 * @property int $SessionExpirationDurationInSeconds
 * @property int $ExpiresInSeconds
 * @property string $SpaceName
 * @property string $LandingUri
 */
class CreatePresignedDomainUrlRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName: string,
     *     SessionExpirationDurationInSeconds?: int,
     *     ExpiresInSeconds?: int,
     *     SpaceName?: string,
     *     LandingUri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
