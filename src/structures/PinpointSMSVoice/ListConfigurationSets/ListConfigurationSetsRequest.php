<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\ListConfigurationSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string|null $PageSize
 */
class ListConfigurationSetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     PageSize?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
