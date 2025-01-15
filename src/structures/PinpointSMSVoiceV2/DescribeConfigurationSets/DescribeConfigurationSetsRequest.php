<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeConfigurationSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ConfigurationSetNames
 * @property list<Shapes\ConfigurationSetFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeConfigurationSetsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetNames?: list<string>|null,
     *     Filters?: list<Shapes\ConfigurationSetFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
