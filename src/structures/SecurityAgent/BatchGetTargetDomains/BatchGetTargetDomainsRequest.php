<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetTargetDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $targetDomainIds
 */
class BatchGetTargetDomainsRequest extends Request
{
    /**
     * @param array{targetDomainIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
