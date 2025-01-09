<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoMemberDefinition $CognitoMemberDefinition
 * @property OidcMemberDefinition $OidcMemberDefinition
 */
class MemberDefinition extends Shape
{
    /**
     * @param array{
     *     CognitoMemberDefinition?: CognitoMemberDefinition,
     *     OidcMemberDefinition?: OidcMemberDefinition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
