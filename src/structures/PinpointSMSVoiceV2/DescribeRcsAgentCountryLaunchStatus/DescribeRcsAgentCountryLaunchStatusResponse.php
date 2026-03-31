<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgentCountryLaunchStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RcsAgentId
 * @property string $RcsAgentArn
 * @property list<Shapes\CountryLaunchStatusInformation>|null $CountryLaunchStatus
 * @property string|null $NextToken
 */
class DescribeRcsAgentCountryLaunchStatusResponse extends Response
{
}
