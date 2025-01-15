<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateConstraint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConstraintDetail|null $ConstraintDetail
 * @property string|null $ConstraintParameters
 * @property 'AVAILABLE'|'CREATING'|'FAILED'|null $Status
 */
class CreateConstraintResponse extends Response
{
}
