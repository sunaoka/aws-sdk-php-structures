<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamExternalResourceVerificationToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 */
class CreateIpamExternalResourceVerificationTokenRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
