<?php

namespace Sunaoka\Aws\Structures\AutoScaling\AttachTrafficSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<Shapes\TrafficSourceIdentifier> $TrafficSources
 * @property bool|null $SkipZonalShiftValidation
 */
class AttachTrafficSourcesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     TrafficSources: list<Shapes\TrafficSourceIdentifier>,
     *     SkipZonalShiftValidation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
