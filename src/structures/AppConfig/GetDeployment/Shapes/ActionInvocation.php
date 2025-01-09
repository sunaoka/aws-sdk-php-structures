<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExtensionIdentifier
 * @property string $ActionName
 * @property string $Uri
 * @property string $RoleArn
 * @property string $ErrorMessage
 * @property string $ErrorCode
 * @property string $InvocationId
 */
class ActionInvocation extends Shape
{
    /**
     * @param array{
     *     ExtensionIdentifier?: string,
     *     ActionName?: string,
     *     Uri?: string,
     *     RoleArn?: string,
     *     ErrorMessage?: string,
     *     ErrorCode?: string,
     *     InvocationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
