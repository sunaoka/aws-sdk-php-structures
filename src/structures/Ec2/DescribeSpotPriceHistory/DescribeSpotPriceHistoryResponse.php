<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotPriceHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\SpotPrice>|null $SpotPriceHistory
 */
class DescribeSpotPriceHistoryResponse extends Response
{
}
