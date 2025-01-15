<?php

namespace Sunaoka\Aws\Structures\CognitoSync\GetIdentityPoolConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreamName
 * @property string|null $RoleArn
 * @property 'ENABLED'|'DISABLED'|null $StreamingStatus
 */
class CognitoStreams extends Shape
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     RoleArn?: string|null,
     *     StreamingStatus?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
