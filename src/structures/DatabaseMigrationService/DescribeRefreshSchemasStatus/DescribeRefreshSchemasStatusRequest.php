<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRefreshSchemasStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 */
class DescribeRefreshSchemasStatusRequest extends Request
{
    /**
     * @param array{EndpointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
