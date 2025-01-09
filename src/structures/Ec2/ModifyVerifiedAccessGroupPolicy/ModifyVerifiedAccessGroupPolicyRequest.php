<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessGroupId
 * @property bool $PolicyEnabled
 * @property string $PolicyDocument
 * @property string $ClientToken
 * @property bool $DryRun
 * @property Shapes\VerifiedAccessSseSpecificationRequest $SseSpecification
 */
class ModifyVerifiedAccessGroupPolicyRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupId: string,
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
