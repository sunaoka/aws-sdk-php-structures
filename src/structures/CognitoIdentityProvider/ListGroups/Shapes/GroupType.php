<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 * @property string|null $UserPoolId
 * @property string|null $Description
 * @property string|null $RoleArn
 * @property int<0, max>|null $Precedence
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 */
class GroupType extends Shape
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     UserPoolId?: string|null,
     *     Description?: string|null,
     *     RoleArn?: string|null,
     *     Precedence?: int<0, max>|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
