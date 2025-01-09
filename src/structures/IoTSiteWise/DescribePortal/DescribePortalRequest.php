<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 */
class DescribePortalRequest extends Request
{
    /**
     * @param array{portalId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
