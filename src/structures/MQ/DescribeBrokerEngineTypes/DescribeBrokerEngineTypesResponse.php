<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerEngineTypes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BrokerEngineType>|null $BrokerEngineTypes
 * @property int<5, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeBrokerEngineTypesResponse extends Response
{
}
