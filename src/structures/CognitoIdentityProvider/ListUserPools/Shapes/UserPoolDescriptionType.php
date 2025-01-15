<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property LambdaConfigType|null $LambdaConfig
 * @property 'Enabled'|'Disabled'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 */
class UserPoolDescriptionType extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     LambdaConfig?: LambdaConfigType|null,
     *     Status?: 'Enabled'|'Disabled'|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
