<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property list<Shapes\RegistrationVersionInformation> $RegistrationVersions
 * @property string $NextToken
 */
class DescribeRegistrationVersionsResponse extends Response
{
}
