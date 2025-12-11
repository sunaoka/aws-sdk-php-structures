<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetIdentityCenterAuthToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $workgroupNames
 */
class GetIdentityCenterAuthTokenRequest extends Request
{
    /**
     * @param array{workgroupNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
