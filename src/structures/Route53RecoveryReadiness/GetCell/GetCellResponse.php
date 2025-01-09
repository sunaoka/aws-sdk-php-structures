<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetCell;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CellArn
 * @property string $CellName
 * @property list<string> $Cells
 * @property list<string> $ParentReadinessScopes
 * @property array<string, string> $Tags
 */
class GetCellResponse extends Response
{
}
