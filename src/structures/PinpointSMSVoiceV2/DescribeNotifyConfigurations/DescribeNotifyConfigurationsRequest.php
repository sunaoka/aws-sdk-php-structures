<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeNotifyConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $NotifyConfigurationIds
 * @property list<Shapes\NotifyConfigurationFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeNotifyConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     NotifyConfigurationIds?: list<string>|null,
     *     Filters?: list<Shapes\NotifyConfigurationFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
