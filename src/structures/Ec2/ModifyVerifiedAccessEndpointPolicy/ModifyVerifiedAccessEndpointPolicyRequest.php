<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpointPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessEndpointId
 * @property bool|null $PolicyEnabled
 * @property string|null $PolicyDocument
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property Shapes\VerifiedAccessSseSpecificationRequest|null $SseSpecification
 */
class ModifyVerifiedAccessEndpointPolicyRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId: string,
     *     PolicyEnabled?: bool|null,
     *     PolicyDocument?: string|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     SseSpecification?: Shapes\VerifiedAccessSseSpecificationRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
