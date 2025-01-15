<?php

namespace Sunaoka\Aws\Structures\SupportApp\ListSlackChannelConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListSlackChannelConfigurationsRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
