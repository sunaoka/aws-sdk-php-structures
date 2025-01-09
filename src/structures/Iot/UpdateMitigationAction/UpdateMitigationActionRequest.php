<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateMitigationAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionName
 * @property string $roleArn
 * @property Shapes\MitigationActionParams $actionParams
 */
class UpdateMitigationActionRequest extends Request
{
    /**
     * @param array{
     *     actionName: string,
     *     roleArn?: string,
     *     actionParams?: Shapes\MitigationActionParams
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
