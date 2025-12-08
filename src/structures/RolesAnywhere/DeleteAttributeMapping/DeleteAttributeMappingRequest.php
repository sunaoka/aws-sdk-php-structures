<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteAttributeMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property 'x509Subject'|'x509Issuer'|'x509SAN' $certificateField
 * @property list<string>|null $specifiers
 */
class DeleteAttributeMappingRequest extends Request
{
    /**
     * @param array{
     *     profileId: string,
     *     certificateField: 'x509Subject'|'x509Issuer'|'x509SAN',
     *     specifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
