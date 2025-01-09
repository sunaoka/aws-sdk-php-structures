<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamExternalResourceVerificationToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 */
class CreateIpamExternalResourceVerificationTokenRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
