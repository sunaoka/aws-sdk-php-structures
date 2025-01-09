<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userPoolId
 * @property string $awsRegion
 * @property string $appIdClientRegex
 */
class CognitoConfig extends Shape
{
    /**
     * @param array{
     *     userPoolId: string,
     *     awsRegion: string,
     *     appIdClientRegex?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
