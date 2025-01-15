<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorizedWithToken;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ALLOW'|'DENY' $decision
 * @property list<Shapes\DeterminingPolicyItem> $determiningPolicies
 * @property list<Shapes\EvaluationErrorItem> $errors
 * @property Shapes\EntityIdentifier|null $principal
 */
class IsAuthorizedWithTokenResponse extends Response
{
}
