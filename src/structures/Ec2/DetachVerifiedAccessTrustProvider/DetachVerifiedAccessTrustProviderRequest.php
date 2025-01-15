<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property string $VerifiedAccessTrustProviderId
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class DetachVerifiedAccessTrustProviderRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId: string,
     *     VerifiedAccessTrustProviderId: string,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
