<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFilter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Description
 * @property 'NOOP'|'ARCHIVE' $Action
 * @property int<1, 100> $Rank
 * @property Shapes\FindingCriteria $FindingCriteria
 * @property array<string, string> $Tags
 */
class GetFilterResponse extends Response
{
}
