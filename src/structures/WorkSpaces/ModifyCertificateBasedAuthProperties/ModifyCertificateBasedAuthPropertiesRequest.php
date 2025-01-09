<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyCertificateBasedAuthProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\CertificateBasedAuthProperties $CertificateBasedAuthProperties
 * @property list<'CERTIFICATE_BASED_AUTH_PROPERTIES_CERTIFICATE_AUTHORITY_ARN'> $PropertiesToDelete
 */
class ModifyCertificateBasedAuthPropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     CertificateBasedAuthProperties?: Shapes\CertificateBasedAuthProperties,
     *     PropertiesToDelete?: list<'CERTIFICATE_BASED_AUTH_PROPERTIES_CERTIFICATE_AUTHORITY_ARN'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
