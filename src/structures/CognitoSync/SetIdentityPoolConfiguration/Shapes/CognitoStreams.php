<?php

namespace Sunaoka\Aws\Structures\CognitoSync\SetIdentityPoolConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamName
 * @property string $RoleArn
 * @property 'ENABLED'|'DISABLED' $StreamingStatus
 */
class CognitoStreams extends Shape
{
    /**
     * @param array{
     *     StreamName?: string,
     *     RoleArn?: string,
     *     StreamingStatus?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
