<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property string $UserPoolId
 * @property string $Description
 * @property string $RoleArn
 * @property int $Precedence
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property \Aws\Api\DateTimeResult $CreationDate
 */
class GroupType extends Shape
{
    /**
     * @param array{
     *     GroupName?: string,
     *     UserPoolId?: string,
     *     Description?: string,
     *     RoleArn?: string,
     *     Precedence?: int,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     CreationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
