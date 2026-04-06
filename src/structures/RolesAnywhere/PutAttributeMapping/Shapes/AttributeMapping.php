<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\PutAttributeMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'x509Subject'|'x509Issuer'|'x509SAN'|null $certificateField
 * @property list<MappingRule>|null $mappingRules
 */
class AttributeMapping extends Shape
{
    /**
     * @param array{
     *     certificateField?: 'x509Subject'|'x509Issuer'|'x509SAN'|null,
     *     mappingRules?: list<MappingRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
