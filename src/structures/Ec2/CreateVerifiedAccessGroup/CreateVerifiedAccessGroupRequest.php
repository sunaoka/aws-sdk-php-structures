<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property string $Description
 * @property string $PolicyDocument
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 * @property bool $DryRun
 * @property Shapes\VerifiedAccessSseSpecificationRequest $SseSpecification
 */
class CreateVerifiedAccessGroupRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId: string,
     *     Description?: string,
     *     PolicyDocument?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
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
