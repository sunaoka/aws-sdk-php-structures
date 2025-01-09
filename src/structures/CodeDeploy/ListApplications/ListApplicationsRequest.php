<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
