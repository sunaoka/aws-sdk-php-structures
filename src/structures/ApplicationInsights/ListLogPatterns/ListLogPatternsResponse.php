<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListLogPatterns;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResourceGroupName
 * @property string $AccountId
 * @property list<Shapes\LogPattern> $LogPatterns
 * @property string $NextToken
 */
class ListLogPatternsResponse extends Response
{
}
