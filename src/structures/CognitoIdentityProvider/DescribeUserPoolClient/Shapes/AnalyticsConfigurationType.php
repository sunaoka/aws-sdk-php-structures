<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPoolClient\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $ApplicationArn
 * @property string $RoleArn
 * @property string $ExternalId
 * @property bool $UserDataShared
 */
class AnalyticsConfigurationType extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     ApplicationArn?: string,
     *     RoleArn?: string,
     *     ExternalId?: string,
     *     UserDataShared?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
