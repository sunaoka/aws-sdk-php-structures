<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetIdentityPoolRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Claim
 * @property 'Equals'|'Contains'|'StartsWith'|'NotEqual' $MatchType
 * @property string $Value
 * @property string $RoleARN
 */
class MappingRule extends Shape
{
    /**
     * @param array{
     *     Claim: string,
     *     MatchType: 'Equals'|'Contains'|'StartsWith'|'NotEqual',
     *     Value: string,
     *     RoleARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
