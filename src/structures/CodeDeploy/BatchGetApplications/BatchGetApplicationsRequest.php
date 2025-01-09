<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $applicationNames
 */
class BatchGetApplicationsRequest extends Request
{
    /**
     * @param array{applicationNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
