<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessEffect;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ALLOW'|'DENY' $Effect
 * @property list<Shapes\MobileDeviceAccessMatchedRule> $MatchedRules
 */
class GetMobileDeviceAccessEffectResponse extends Response
{
}
