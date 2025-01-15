<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRoleEffect;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'FULL_ACCESS'|'READ_ONLY'|null $Type
 * @property 'ALLOW'|'DENY'|null $Effect
 * @property list<Shapes\ImpersonationMatchedRule>|null $MatchedRules
 */
class GetImpersonationRoleEffectResponse extends Response
{
}
