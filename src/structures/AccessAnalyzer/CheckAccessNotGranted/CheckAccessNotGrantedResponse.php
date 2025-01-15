<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckAccessNotGranted;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PASS'|'FAIL'|null $result
 * @property string|null $message
 * @property list<Shapes\ReasonSummary>|null $reasons
 */
class CheckAccessNotGrantedResponse extends Response
{
}
