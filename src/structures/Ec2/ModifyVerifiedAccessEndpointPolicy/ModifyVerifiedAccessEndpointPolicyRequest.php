<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpointPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessEndpointId
 * @property bool $PolicyEnabled
 * @property string $PolicyDocument
 * @property string $ClientToken
 * @property bool $DryRun
 * @property Shapes\VerifiedAccessSseSpecificationRequest $SseSpecification
 */
class ModifyVerifiedAccessEndpointPolicyRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId: string,
     *     PolicyEnabled?: bool,
     *     PolicyDocument?: string,
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     SseSpecification?: Shapes\VerifiedAccessSseSpecificationRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
