<?php

namespace Sunaoka\Aws\Structures\AppSync\GetGraphqlApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userPoolId
 * @property string $awsRegion
 * @property 'ALLOW'|'DENY' $defaultAction
 * @property string $appIdClientRegex
 */
class UserPoolConfig extends Shape
{
    /**
     * @param array{
     *     userPoolId: string,
     *     awsRegion: string,
     *     defaultAction: 'ALLOW'|'DENY',
     *     appIdClientRegex?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
