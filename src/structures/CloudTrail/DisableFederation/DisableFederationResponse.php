<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DisableFederation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EventDataStoreArn
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED' $FederationStatus
 */
class DisableFederationResponse extends Response
{
}
