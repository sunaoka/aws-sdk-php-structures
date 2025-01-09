<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateConstraint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConstraintDetail $ConstraintDetail
 * @property string $ConstraintParameters
 * @property 'AVAILABLE'|'CREATING'|'FAILED' $Status
 */
class UpdateConstraintResponse extends Response
{
}
