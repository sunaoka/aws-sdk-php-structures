<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteConnectClientAddIn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddInId
 * @property string $ResourceId
 */
class DeleteConnectClientAddInRequest extends Request
{
    /**
     * @param array{
     *     AddInId: string,
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
