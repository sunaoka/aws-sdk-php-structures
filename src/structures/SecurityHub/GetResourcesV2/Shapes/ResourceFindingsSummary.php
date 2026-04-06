<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FindingType
 * @property string $ProductName
 * @property int $TotalFindings
 * @property ResourceSeverityBreakdown|null $Severities
 */
class ResourceFindingsSummary extends Shape
{
    /**
     * @param array{
     *     FindingType: string,
     *     ProductName: string,
     *     TotalFindings: int,
     *     Severities?: ResourceSeverityBreakdown|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
