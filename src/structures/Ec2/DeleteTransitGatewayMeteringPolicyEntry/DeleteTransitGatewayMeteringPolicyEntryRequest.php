<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayMeteringPolicyEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayMeteringPolicyId
 * @property int $PolicyRuleNumber
 * @property bool|null $DryRun
 */
class DeleteTransitGatewayMeteringPolicyEntryRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMeteringPolicyId: string,
     *     PolicyRuleNumber: int,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
