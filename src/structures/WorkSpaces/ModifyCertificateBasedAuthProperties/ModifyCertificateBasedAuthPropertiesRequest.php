<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyCertificateBasedAuthProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\CertificateBasedAuthProperties|null $CertificateBasedAuthProperties
 * @property list<'CERTIFICATE_BASED_AUTH_PROPERTIES_CERTIFICATE_AUTHORITY_ARN'>|null $PropertiesToDelete
 */
class ModifyCertificateBasedAuthPropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     CertificateBasedAuthProperties?: Shapes\CertificateBasedAuthProperties|null,
     *     PropertiesToDelete?: list<'CERTIFICATE_BASED_AUTH_PROPERTIES_CERTIFICATE_AUTHORITY_ARN'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
