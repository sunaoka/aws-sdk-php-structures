<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Password'|'Mfa' $ChallengeName
 * @property 'Success'|'Failure' $ChallengeResponse
 */
class ChallengeResponseType extends Shape
{
    /**
     * @param array{
     *     ChallengeName?: 'Password'|'Mfa',
     *     ChallengeResponse?: 'Success'|'Failure'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
