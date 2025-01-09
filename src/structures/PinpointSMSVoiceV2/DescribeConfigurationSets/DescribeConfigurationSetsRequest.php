<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeConfigurationSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConfigurationSetNames
 * @property list<Shapes\ConfigurationSetFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeConfigurationSetsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetNames?: list<string>,
     *     Filters?: list<Shapes\ConfigurationSetFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
