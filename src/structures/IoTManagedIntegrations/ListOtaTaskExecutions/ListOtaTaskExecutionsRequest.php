<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListOtaTaskExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListOtaTaskExecutionsRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
