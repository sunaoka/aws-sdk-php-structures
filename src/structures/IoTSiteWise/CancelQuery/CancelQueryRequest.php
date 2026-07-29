<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CancelQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $queryId
 */
class CancelQueryRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     queryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
