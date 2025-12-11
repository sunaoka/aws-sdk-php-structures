<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMeteringPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property list<string>|null $MiddleboxAttachmentIds
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateTransitGatewayMeteringPolicyRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     MiddleboxAttachmentIds?: list<string>|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
