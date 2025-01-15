<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptedOutNumbers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $OptOutListArn
 * @property string|null $OptOutListName
 * @property list<Shapes\OptedOutNumberInformation>|null $OptedOutNumbers
 * @property string|null $NextToken
 */
class DescribeOptedOutNumbersResponse extends Response
{
}
