<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DescribeApplicationState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class DescribeApplicationStateRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
