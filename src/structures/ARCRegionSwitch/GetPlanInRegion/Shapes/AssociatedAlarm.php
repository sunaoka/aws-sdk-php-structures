<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property string $resourceIdentifier
 * @property 'applicationHealth'|'trigger' $alarmType
 */
class AssociatedAlarm extends Shape
{
    /**
     * @param array{
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     resourceIdentifier: string,
     *     alarmType: 'applicationHealth'|'trigger'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
