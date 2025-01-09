<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\ListConfigurationSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property string $PageSize
 */
class ListConfigurationSetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
