<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROPERTIES'|'METADATA'|'CREATIONPOLICY'|'UPDATEPOLICY'|'DELETIONPOLICY'|'TAGS' $Attribute
 * @property string $Name
 * @property 'NEVER'|'CONDITIONALLY'|'ALWAYS' $RequiresRecreation
 */
class ResourceTargetDefinition extends Shape
{
    /**
     * @param array{
     *     Attribute?: 'PROPERTIES'|'METADATA'|'CREATIONPOLICY'|'UPDATEPOLICY'|'DELETIONPOLICY'|'TAGS',
     *     Name?: string,
     *     RequiresRecreation?: 'NEVER'|'CONDITIONALLY'|'ALWAYS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
