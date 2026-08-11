<?php

namespace Sunaoka\Aws\Structures\AccountAccess\GetEntitlement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationArn
 * @property string $entitlementId
 * @property Shapes\EntitlementDetails $entitlement
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class GetEntitlementResponse extends Response
{
}
