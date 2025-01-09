<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldValues;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property int $VersionNumber
 * @property list<Shapes\RegistrationFieldValueInformation> $RegistrationFieldValues
 * @property string $NextToken
 */
class DescribeRegistrationFieldValuesResponse extends Response
{
}
