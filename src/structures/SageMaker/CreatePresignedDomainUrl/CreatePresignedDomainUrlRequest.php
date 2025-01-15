<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePresignedDomainUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 * @property int<1800, 43200>|null $SessionExpirationDurationInSeconds
 * @property int<5, 300>|null $ExpiresInSeconds
 * @property string|null $SpaceName
 * @property string|null $LandingUri
 */
class CreatePresignedDomainUrlRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName: string,
     *     SessionExpirationDurationInSeconds?: int<1800, 43200>|null,
     *     ExpiresInSeconds?: int<5, 300>|null,
     *     SpaceName?: string|null,
     *     LandingUri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
