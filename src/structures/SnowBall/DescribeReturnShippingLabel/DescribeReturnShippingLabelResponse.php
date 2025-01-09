<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeReturnShippingLabel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'InProgress'|'TimedOut'|'Succeeded'|'Failed' $Status
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property string $ReturnShippingLabelURI
 */
class DescribeReturnShippingLabelResponse extends Response
{
}
