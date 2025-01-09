<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\PutAttributeMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'x509Subject'|'x509Issuer'|'x509SAN' $certificateField
 * @property list<Shapes\MappingRule> $mappingRules
 * @property string $profileId
 */
class PutAttributeMappingRequest extends Request
{
    /**
     * @param array{
     *     certificateField: 'x509Subject'|'x509Issuer'|'x509SAN',
     *     mappingRules: list<Shapes\MappingRule>,
     *     profileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
