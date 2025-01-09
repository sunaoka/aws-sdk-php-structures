<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRoleEffect;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'FULL_ACCESS'|'READ_ONLY' $Type
 * @property 'ALLOW'|'DENY' $Effect
 * @property list<Shapes\ImpersonationMatchedRule> $MatchedRules
 */
class GetImpersonationRoleEffectResponse extends Response
{
}
