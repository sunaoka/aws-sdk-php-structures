<?php

namespace Sunaoka\Aws\Structures\Waf\ListLoggingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextMarker
 * @property int $Limit
 */
class ListLoggingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
