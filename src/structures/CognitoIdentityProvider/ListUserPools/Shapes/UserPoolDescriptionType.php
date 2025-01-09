<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property LambdaConfigType $LambdaConfig
 * @property 'Enabled'|'Disabled' $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property \Aws\Api\DateTimeResult $CreationDate
 */
class UserPoolDescriptionType extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     LambdaConfig?: LambdaConfigType,
     *     Status?: 'Enabled'|'Disabled',
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     CreationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
