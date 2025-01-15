<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string> $ReservedInstanceIds
 * @property list<Shapes\TargetConfigurationRequest>|null $TargetConfigurations
 */
class GetReservedInstancesExchangeQuoteRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ReservedInstanceIds: list<string>,
     *     TargetConfigurations?: list<Shapes\TargetConfigurationRequest>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
