<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeResourceAssociations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SMCapacityReservationArn
 * @property string $SMCapacityReservationId
 * @property list<Shapes\CapacityReservationResourceAssociation> $ResourceAssociations
 * @property string|null $NextToken
 */
class DescribeResourceAssociationsResponse extends Response
{
}
