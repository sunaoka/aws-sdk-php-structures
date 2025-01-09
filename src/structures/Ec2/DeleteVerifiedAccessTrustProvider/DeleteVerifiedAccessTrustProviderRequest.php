<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessTrustProviderId
 * @property bool $DryRun
 * @property string $ClientToken
 */
class DeleteVerifiedAccessTrustProviderRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderId: string,
     *     DryRun?: bool,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
