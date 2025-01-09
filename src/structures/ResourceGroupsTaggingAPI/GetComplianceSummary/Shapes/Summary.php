<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LastUpdated
 * @property string $TargetId
 * @property 'ACCOUNT'|'OU'|'ROOT' $TargetIdType
 * @property string $Region
 * @property string $ResourceType
 * @property int $NonCompliantResources
 */
class Summary extends Shape
{
    /**
     * @param array{
     *     LastUpdated?: string,
     *     TargetId?: string,
     *     TargetIdType?: 'ACCOUNT'|'OU'|'ROOT',
     *     Region?: string,
     *     ResourceType?: string,
     *     NonCompliantResources?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
