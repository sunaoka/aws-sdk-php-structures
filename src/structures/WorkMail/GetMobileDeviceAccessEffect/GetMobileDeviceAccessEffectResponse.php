<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessEffect;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ALLOW'|'DENY'|null $Effect
 * @property list<Shapes\MobileDeviceAccessMatchedRule>|null $MatchedRules
 */
class GetMobileDeviceAccessEffectResponse extends Response
{
}
