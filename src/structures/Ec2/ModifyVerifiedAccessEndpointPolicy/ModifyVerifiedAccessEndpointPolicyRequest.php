<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpointPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessEndpointId
 * @property bool $PolicyEnabled
 * @property string|null $PolicyDocument
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class ModifyVerifiedAccessEndpointPolicyRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId: string,
     *     PolicyEnabled: bool,
     *     PolicyDocument?: string|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
