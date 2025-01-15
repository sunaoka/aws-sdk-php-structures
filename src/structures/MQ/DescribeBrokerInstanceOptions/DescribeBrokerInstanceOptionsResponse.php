<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerInstanceOptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BrokerInstanceOption>|null $BrokerInstanceOptions
 * @property int<5, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeBrokerInstanceOptionsResponse extends Response
{
}
