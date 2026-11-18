<?php

namespace Sunaoka\Aws\Structures\Billing\SplitCredit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $parentCreditId
 * @property list<Shapes\ChildCredit> $childCredits
 * @property bool $dryRun
 */
class SplitCreditResponse extends Response
{
}
