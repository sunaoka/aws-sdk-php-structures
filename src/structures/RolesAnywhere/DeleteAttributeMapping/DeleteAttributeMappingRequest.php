<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteAttributeMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'x509Subject'|'x509Issuer'|'x509SAN' $certificateField
 * @property string $profileId
 * @property list<string> $specifiers
 */
class DeleteAttributeMappingRequest extends Request
{
    /**
     * @param array{
     *     certificateField: 'x509Subject'|'x509Issuer'|'x509SAN',
     *     profileId: string,
     *     specifiers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
