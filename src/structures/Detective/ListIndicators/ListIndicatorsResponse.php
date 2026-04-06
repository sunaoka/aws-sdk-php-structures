<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GraphArn
 * @property string|null $InvestigationId
 * @property string|null $NextToken
 * @property list<Shapes\Indicator>|null $Indicators
 */
class ListIndicatorsResponse extends Response
{
}
