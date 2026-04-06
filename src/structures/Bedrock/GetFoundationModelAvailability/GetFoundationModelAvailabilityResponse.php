<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetFoundationModelAvailability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $modelId
 * @property Shapes\AgreementAvailability $agreementAvailability
 * @property 'AUTHORIZED'|'NOT_AUTHORIZED' $authorizationStatus
 * @property 'AVAILABLE'|'NOT_AVAILABLE' $entitlementAvailability
 * @property 'AVAILABLE'|'NOT_AVAILABLE' $regionAvailability
 */
class GetFoundationModelAvailabilityResponse extends Response
{
}
