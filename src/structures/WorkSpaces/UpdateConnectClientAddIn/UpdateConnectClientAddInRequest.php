<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateConnectClientAddIn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddInId
 * @property string $ResourceId
 * @property string $Name
 * @property string $URL
 */
class UpdateConnectClientAddInRequest extends Request
{
    /**
     * @param array{
     *     AddInId: string,
     *     ResourceId: string,
     *     Name?: string,
     *     URL?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
