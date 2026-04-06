<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identityCenterInstanceArn
 * @property bool|null $userBackgroundSessionsEnabled
 */
class IdentityCenterConfigurationInput extends Shape
{
    /**
     * @param array{
     *     identityCenterInstanceArn?: string|null,
     *     userBackgroundSessionsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
