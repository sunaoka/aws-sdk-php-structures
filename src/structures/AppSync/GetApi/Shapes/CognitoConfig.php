<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userPoolId
 * @property string $awsRegion
 * @property string|null $appIdClientRegex
 */
class CognitoConfig extends Shape
{
    /**
     * @param array{
     *     userPoolId: string,
     *     awsRegion: string,
     *     appIdClientRegex?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
