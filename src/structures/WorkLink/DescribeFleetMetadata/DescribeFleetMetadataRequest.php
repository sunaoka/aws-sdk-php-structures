<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeFleetMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 */
class DescribeFleetMetadataRequest extends Request
{
    /**
     * @param array{FleetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
