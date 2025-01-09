<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ListLunaClients;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListLunaClientsRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
