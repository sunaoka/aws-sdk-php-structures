<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateConnectionsBillingMode;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PayAsYouGo'|'FlatRateTier1'|'FlatRateTier2'|'FlatRateTier3'|'FlatRateTier4'|'FlatRateTier5'|'PortPairFlatRateTier1'|'PortPairFlatRateTier2'|'PortPairFlatRateTier3'|'PortPairFlatRateTier4'|'PortPairFlatRateTier5'|null $billingMode
 * @property list<Shapes\Connection>|null $connections
 */
class UpdateConnectionsBillingModeResponse extends Response
{
}
