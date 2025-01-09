<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeProtectConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ProtectConfigurationIds
 * @property list<Shapes\ProtectConfigurationFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeProtectConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ProtectConfigurationIds?: list<string>,
     *     Filters?: list<Shapes\ProtectConfigurationFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
