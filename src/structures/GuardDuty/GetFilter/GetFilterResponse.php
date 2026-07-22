<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFilter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'NOOP'|'ARCHIVE' $Action
 * @property int<1, 100>|null $Rank
 * @property Shapes\FindingCriteria $FindingCriteria
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property int<1, max>|null $Version
 */
class GetFilterResponse extends Response
{
}
