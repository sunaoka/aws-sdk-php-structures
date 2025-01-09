<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GraphArn
 * @property string $InvestigationId
 * @property string $NextToken
 * @property list<Shapes\Indicator> $Indicators
 */
class ListIndicatorsResponse extends Response
{
}
