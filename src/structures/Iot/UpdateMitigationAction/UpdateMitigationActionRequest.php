<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateMitigationAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionName
 * @property string|null $roleArn
 * @property Shapes\MitigationActionParams|null $actionParams
 */
class UpdateMitigationActionRequest extends Request
{
    /**
     * @param array{
     *     actionName: string,
     *     roleArn?: string|null,
     *     actionParams?: Shapes\MitigationActionParams|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
