<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateConnectClientAddIn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string $Name
 * @property string $URL
 */
class CreateConnectClientAddInRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     Name: string,
     *     URL: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
