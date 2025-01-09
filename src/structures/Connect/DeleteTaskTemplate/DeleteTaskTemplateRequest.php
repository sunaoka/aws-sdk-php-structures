<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteTaskTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TaskTemplateId
 */
class DeleteTaskTemplateRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TaskTemplateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
