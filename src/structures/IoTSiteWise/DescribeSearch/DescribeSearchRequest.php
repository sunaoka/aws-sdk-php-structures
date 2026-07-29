<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $searchId
 */
class DescribeSearchRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     searchId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
