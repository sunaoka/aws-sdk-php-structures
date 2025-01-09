<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\TriggerUpdate $TriggerUpdate
 */
class UpdateTriggerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     TriggerUpdate: Shapes\TriggerUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
