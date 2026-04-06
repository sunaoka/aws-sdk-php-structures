<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeProtectConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ProtectConfigurationIds
 * @property list<Shapes\ProtectConfigurationFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeProtectConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ProtectConfigurationIds?: list<string>|null,
     *     Filters?: list<Shapes\ProtectConfigurationFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
