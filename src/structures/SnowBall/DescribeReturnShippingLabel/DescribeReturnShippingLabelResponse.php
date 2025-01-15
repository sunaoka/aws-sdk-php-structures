<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeReturnShippingLabel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'InProgress'|'TimedOut'|'Succeeded'|'Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string|null $ReturnShippingLabelURI
 */
class DescribeReturnShippingLabelResponse extends Response
{
}
