<?php

namespace Sunaoka\Aws\Structures\Detective\BatchGetMembershipDatasources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $GraphArns
 */
class BatchGetMembershipDatasourcesRequest extends Request
{
    /**
     * @param array{GraphArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
