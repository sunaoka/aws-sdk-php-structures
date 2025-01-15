<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $UserPoolId
 * @property string|null $IdentityPoolId
 * @property string|null $RoleArn
 */
class CognitoOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     UserPoolId?: string|null,
     *     IdentityPoolId?: string|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
