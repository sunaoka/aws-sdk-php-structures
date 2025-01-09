<?php

namespace Sunaoka\Aws\Structures\SupportApp\ListSlackChannelConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class ListSlackChannelConfigurationsRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
