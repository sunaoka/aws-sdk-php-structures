<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckAccessNotGranted;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PASS'|'FAIL' $result
 * @property string $message
 * @property list<Shapes\ReasonSummary> $reasons
 */
class CheckAccessNotGrantedResponse extends Response
{
}
