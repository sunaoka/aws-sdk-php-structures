<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\UpdateWebFunctionEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainName
 * @property 'ApplicationManaged'|'IamAuth' $authType
 * @property list<RevisionWeight> $revisionWeights
 * @property ScalingConfig|null $scalingConfig
 * @property ThrottleConfig|null $throttleConfig
 * @property 'Pending'|'Active'|'Failed'|'Deleting' $state
 * @property string $stateReason
 * @property 'InProgress'|'Successful'|'Failed'|null $updateStatus
 * @property string|null $updateStatusReason
 */
class RegionalEndpoint extends Shape
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     authType: 'ApplicationManaged'|'IamAuth',
     *     revisionWeights: list<RevisionWeight>,
     *     scalingConfig?: ScalingConfig|null,
     *     throttleConfig?: ThrottleConfig|null,
     *     state: 'Pending'|'Active'|'Failed'|'Deleting',
     *     stateReason: string,
     *     updateStatus?: 'InProgress'|'Successful'|'Failed'|null,
     *     updateStatusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
