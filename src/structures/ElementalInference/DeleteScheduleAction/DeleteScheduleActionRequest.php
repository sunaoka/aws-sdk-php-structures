<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteScheduleAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $actionName
 */
class DeleteScheduleActionRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     actionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
