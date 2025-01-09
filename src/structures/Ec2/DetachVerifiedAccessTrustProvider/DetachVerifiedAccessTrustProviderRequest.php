<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property string $VerifiedAccessTrustProviderId
 * @property string $ClientToken
 * @property bool $DryRun
 */
class DetachVerifiedAccessTrustProviderRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId: string,
     *     VerifiedAccessTrustProviderId: string,
     *     ClientToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
