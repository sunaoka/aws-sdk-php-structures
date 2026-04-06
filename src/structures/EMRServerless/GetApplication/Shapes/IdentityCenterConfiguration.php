<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identityCenterInstanceArn
 * @property string|null $identityCenterApplicationArn
 * @property bool|null $userBackgroundSessionsEnabled
 */
class IdentityCenterConfiguration extends Shape
{
    /**
     * @param array{
     *     identityCenterInstanceArn?: string|null,
     *     identityCenterApplicationArn?: string|null,
     *     userBackgroundSessionsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
