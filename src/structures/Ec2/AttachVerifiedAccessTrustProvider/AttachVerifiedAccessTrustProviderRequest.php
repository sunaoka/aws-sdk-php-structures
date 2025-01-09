<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property string $VerifiedAccessTrustProviderId
 * @property string $ClientToken
 * @property bool $DryRun
 */
class AttachVerifiedAccessTrustProviderRequest extends Request
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
