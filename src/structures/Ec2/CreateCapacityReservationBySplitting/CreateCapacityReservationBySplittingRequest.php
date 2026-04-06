<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationBySplitting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property string $SourceCapacityReservationId
 * @property int $InstanceCount
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateCapacityReservationBySplittingRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     SourceCapacityReservationId: string,
     *     InstanceCount: int,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
