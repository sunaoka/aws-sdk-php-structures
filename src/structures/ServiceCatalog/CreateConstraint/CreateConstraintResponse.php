<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateConstraint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConstraintDetail $ConstraintDetail
 * @property string $ConstraintParameters
 * @property 'AVAILABLE'|'CREATING'|'FAILED' $Status
 */
class CreateConstraintResponse extends Response
{
}
