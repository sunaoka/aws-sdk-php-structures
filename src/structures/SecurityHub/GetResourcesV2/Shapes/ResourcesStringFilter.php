<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceGuid'|'ResourceId'|'AccountId'|'Region'|'ResourceCategory'|'ResourceType'|'ResourceName'|'FindingsSummary.FindingType'|'FindingsSummary.ProductName'|null $FieldName
 * @property StringFilter|null $Filter
 */
class ResourcesStringFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'ResourceGuid'|'ResourceId'|'AccountId'|'Region'|'ResourceCategory'|'ResourceType'|'ResourceName'|'FindingsSummary.FindingType'|'FindingsSummary.ProductName'|null,
     *     Filter?: StringFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
