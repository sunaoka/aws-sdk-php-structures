<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\ListConfigurationSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $PageSize
 */
class ListConfigurationSetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
