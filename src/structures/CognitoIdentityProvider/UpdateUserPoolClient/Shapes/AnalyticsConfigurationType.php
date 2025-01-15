<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolClient\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $ApplicationArn
 * @property string|null $RoleArn
 * @property string|null $ExternalId
 * @property bool|null $UserDataShared
 */
class AnalyticsConfigurationType extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     ApplicationArn?: string|null,
     *     RoleArn?: string|null,
     *     ExternalId?: string|null,
     *     UserDataShared?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
