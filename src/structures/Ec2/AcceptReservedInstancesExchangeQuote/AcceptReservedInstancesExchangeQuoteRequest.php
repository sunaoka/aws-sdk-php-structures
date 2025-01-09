<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptReservedInstancesExchangeQuote;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $ReservedInstanceIds
 * @property list<Shapes\TargetConfigurationRequest> $TargetConfigurations
 */
class AcceptReservedInstancesExchangeQuoteRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ReservedInstanceIds: list<string>,
     *     TargetConfigurations?: list<Shapes\TargetConfigurationRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
