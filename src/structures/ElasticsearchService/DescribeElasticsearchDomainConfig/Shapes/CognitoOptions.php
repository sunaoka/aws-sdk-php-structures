<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $UserPoolId
 * @property string $IdentityPoolId
 * @property string $RoleArn
 */
class CognitoOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     UserPoolId?: string,
     *     IdentityPoolId?: string,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
