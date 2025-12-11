<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayMeteringPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayMeteringPolicyId
 * @property list<string>|null $AddMiddleboxAttachmentIds
 * @property list<string>|null $RemoveMiddleboxAttachmentIds
 * @property bool|null $DryRun
 */
class ModifyTransitGatewayMeteringPolicyRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMeteringPolicyId: string,
     *     AddMiddleboxAttachmentIds?: list<string>|null,
     *     RemoveMiddleboxAttachmentIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
