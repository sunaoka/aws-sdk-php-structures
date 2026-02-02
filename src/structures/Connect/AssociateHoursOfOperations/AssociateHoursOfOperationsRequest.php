<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateHoursOfOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $HoursOfOperationId
 * @property list<Shapes\ParentHoursOfOperationConfig> $ParentHoursOfOperationConfigs
 */
class AssociateHoursOfOperationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HoursOfOperationId: string,
     *     ParentHoursOfOperationConfigs: list<Shapes\ParentHoursOfOperationConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
