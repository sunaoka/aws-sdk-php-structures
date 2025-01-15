<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LastUpdated
 * @property string|null $TargetId
 * @property 'ACCOUNT'|'OU'|'ROOT'|null $TargetIdType
 * @property string|null $Region
 * @property string|null $ResourceType
 * @property int|null $NonCompliantResources
 */
class Summary extends Shape
{
    /**
     * @param array{
     *     LastUpdated?: string|null,
     *     TargetId?: string|null,
     *     TargetIdType?: 'ACCOUNT'|'OU'|'ROOT'|null,
     *     Region?: string|null,
     *     ResourceType?: string|null,
     *     NonCompliantResources?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
