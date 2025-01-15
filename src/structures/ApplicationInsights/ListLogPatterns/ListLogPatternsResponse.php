<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListLogPatterns;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceGroupName
 * @property string|null $AccountId
 * @property list<Shapes\LogPattern>|null $LogPatterns
 * @property string|null $NextToken
 */
class ListLogPatternsResponse extends Response
{
}
