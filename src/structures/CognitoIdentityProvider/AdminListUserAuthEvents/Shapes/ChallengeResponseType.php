<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Password'|'Mfa'|null $ChallengeName
 * @property 'Success'|'Failure'|null $ChallengeResponse
 */
class ChallengeResponseType extends Shape
{
    /**
     * @param array{
     *     ChallengeName?: 'Password'|'Mfa'|null,
     *     ChallengeResponse?: 'Success'|'Failure'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
