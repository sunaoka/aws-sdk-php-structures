<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListVPCEConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListVPCEConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
