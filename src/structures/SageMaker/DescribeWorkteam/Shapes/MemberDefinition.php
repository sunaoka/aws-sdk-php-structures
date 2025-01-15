<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoMemberDefinition|null $CognitoMemberDefinition
 * @property OidcMemberDefinition|null $OidcMemberDefinition
 */
class MemberDefinition extends Shape
{
    /**
     * @param array{
     *     CognitoMemberDefinition?: CognitoMemberDefinition|null,
     *     OidcMemberDefinition?: OidcMemberDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
