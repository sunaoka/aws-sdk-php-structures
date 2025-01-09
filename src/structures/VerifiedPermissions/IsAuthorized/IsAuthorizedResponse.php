<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorized;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ALLOW'|'DENY' $decision
 * @property list<Shapes\DeterminingPolicyItem> $determiningPolicies
 * @property list<Shapes\EvaluationErrorItem> $errors
 */
class IsAuthorizedResponse extends Response
{
}
