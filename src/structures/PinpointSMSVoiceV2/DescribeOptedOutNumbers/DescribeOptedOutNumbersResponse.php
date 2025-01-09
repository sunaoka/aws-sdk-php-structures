<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptedOutNumbers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OptOutListArn
 * @property string $OptOutListName
 * @property list<Shapes\OptedOutNumberInformation> $OptedOutNumbers
 * @property string $NextToken
 */
class DescribeOptedOutNumbersResponse extends Response
{
}
