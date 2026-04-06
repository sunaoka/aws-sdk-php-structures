<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property string|null $Description
 * @property string|null $PolicyDocument
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property Shapes\VerifiedAccessSseSpecificationRequest|null $SseSpecification
 */
class CreateVerifiedAccessGroupRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId: string,
     *     Description?: string|null,
     *     PolicyDocument?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
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
