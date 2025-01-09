<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListServicesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
