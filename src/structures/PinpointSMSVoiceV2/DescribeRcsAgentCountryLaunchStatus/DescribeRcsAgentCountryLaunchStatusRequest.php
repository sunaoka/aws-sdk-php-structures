<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgentCountryLaunchStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RcsAgentId
 * @property list<string>|null $IsoCountryCodes
 * @property list<Shapes\CountryLaunchStatusFilter>|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeRcsAgentCountryLaunchStatusRequest extends Request
{
    /**
     * @param array{
     *     RcsAgentId: string,
     *     IsoCountryCodes?: list<string>|null,
     *     Filters?: list<Shapes\CountryLaunchStatusFilter>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
