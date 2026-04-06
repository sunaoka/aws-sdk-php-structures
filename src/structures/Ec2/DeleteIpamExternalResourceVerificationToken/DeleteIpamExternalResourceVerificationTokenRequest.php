<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamExternalResourceVerificationToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamExternalResourceVerificationTokenId
 */
class DeleteIpamExternalResourceVerificationTokenRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamExternalResourceVerificationTokenId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
