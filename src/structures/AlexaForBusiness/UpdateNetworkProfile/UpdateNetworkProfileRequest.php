<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateNetworkProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkProfileArn
 * @property string|null $NetworkProfileName
 * @property string|null $Description
 * @property string|null $CurrentPassword
 * @property string|null $NextPassword
 * @property string|null $CertificateAuthorityArn
 * @property list<string>|null $TrustAnchors
 */
class UpdateNetworkProfileRequest extends Request
{
    /**
     * @param array{
     *     NetworkProfileArn: string,
     *     NetworkProfileName?: string|null,
     *     Description?: string|null,
     *     CurrentPassword?: string|null,
     *     NextPassword?: string|null,
     *     CertificateAuthorityArn?: string|null,
     *     TrustAnchors?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
