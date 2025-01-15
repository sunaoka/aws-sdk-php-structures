<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ListLunaClients;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class ListLunaClientsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
