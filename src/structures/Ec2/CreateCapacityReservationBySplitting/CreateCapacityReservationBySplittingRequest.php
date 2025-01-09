<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationBySplitting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ClientToken
 * @property string $SourceCapacityReservationId
 * @property int $InstanceCount
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class CreateCapacityReservationBySplittingRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     SourceCapacityReservationId: string,
     *     InstanceCount: int,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
