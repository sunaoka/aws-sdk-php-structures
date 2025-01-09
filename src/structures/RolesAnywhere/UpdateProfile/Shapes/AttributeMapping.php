<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'x509Subject'|'x509Issuer'|'x509SAN' $certificateField
 * @property list<MappingRule> $mappingRules
 */
class AttributeMapping extends Shape
{
    /**
     * @param array{
     *     certificateField?: 'x509Subject'|'x509Issuer'|'x509SAN',
     *     mappingRules?: list<MappingRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
