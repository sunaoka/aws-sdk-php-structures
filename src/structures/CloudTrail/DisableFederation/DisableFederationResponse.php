<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DisableFederation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventDataStoreArn
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|null $FederationStatus
 */
class DisableFederationResponse extends Response
{
}
