<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateConstraint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConstraintDetail|null $ConstraintDetail
 * @property string|null $ConstraintParameters
 * @property 'AVAILABLE'|'CREATING'|'FAILED'|null $Status
 */
class UpdateConstraintResponse extends Response
{
}
