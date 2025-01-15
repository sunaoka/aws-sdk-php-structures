<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetCell;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CellArn
 * @property string|null $CellName
 * @property list<string>|null $Cells
 * @property list<string>|null $ParentReadinessScopes
 * @property array<string, string>|null $Tags
 */
class GetCellResponse extends Response
{
}
