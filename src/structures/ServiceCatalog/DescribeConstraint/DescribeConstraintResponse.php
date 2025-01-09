<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeConstraint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConstraintDetail $ConstraintDetail
 * @property string $ConstraintParameters
 * @property 'AVAILABLE'|'CREATING'|'FAILED' $Status
 */
class DescribeConstraintResponse extends Response
{
}
