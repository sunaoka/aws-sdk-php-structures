<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPolicyTableEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayPolicyTableId
 * @property string $PolicyRuleNumber
 * @property bool|null $DryRun
 */
class DeleteTransitGatewayPolicyTableEntryRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableId: string,
     *     PolicyRuleNumber: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
