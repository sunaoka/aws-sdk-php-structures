<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessTrustProviderId
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 */
class DeleteVerifiedAccessTrustProviderRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderId: string,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
