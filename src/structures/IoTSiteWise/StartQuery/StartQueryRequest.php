<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\StartQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $workspaceName
 * @property string $queryStatement
 */
class StartQueryRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     workspaceName: string,
     *     queryStatement: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
