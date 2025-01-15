<?php

namespace Sunaoka\Aws\Structures\AppConfig\StopDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExtensionIdentifier
 * @property string|null $ActionName
 * @property string|null $Uri
 * @property string|null $RoleArn
 * @property string|null $ErrorMessage
 * @property string|null $ErrorCode
 * @property string|null $InvocationId
 */
class ActionInvocation extends Shape
{
    /**
     * @param array{
     *     ExtensionIdentifier?: string|null,
     *     ActionName?: string|null,
     *     Uri?: string|null,
     *     RoleArn?: string|null,
     *     ErrorMessage?: string|null,
     *     ErrorCode?: string|null,
     *     InvocationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
