<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROPERTIES'|'METADATA'|'CREATIONPOLICY'|'UPDATEPOLICY'|'DELETIONPOLICY'|'TAGS'|null $Attribute
 * @property string|null $Name
 * @property 'NEVER'|'CONDITIONALLY'|'ALWAYS'|null $RequiresRecreation
 */
class ResourceTargetDefinition extends Shape
{
    /**
     * @param array{
     *     Attribute?: 'PROPERTIES'|'METADATA'|'CREATIONPOLICY'|'UPDATEPOLICY'|'DELETIONPOLICY'|'TAGS'|null,
     *     Name?: string|null,
     *     RequiresRecreation?: 'NEVER'|'CONDITIONALLY'|'ALWAYS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
