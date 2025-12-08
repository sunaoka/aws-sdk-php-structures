<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\PutAttributeMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property 'x509Subject'|'x509Issuer'|'x509SAN' $certificateField
 * @property list<Shapes\MappingRule> $mappingRules
 */
class PutAttributeMappingRequest extends Request
{
    /**
     * @param array{
     *     profileId: string,
     *     certificateField: 'x509Subject'|'x509Issuer'|'x509SAN',
     *     mappingRules: list<Shapes\MappingRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
