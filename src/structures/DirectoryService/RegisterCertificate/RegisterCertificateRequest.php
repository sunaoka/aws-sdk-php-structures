<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RegisterCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $CertificateData
 * @property 'ClientCertAuth'|'ClientLDAPS' $Type
 * @property Shapes\ClientCertAuthSettings $ClientCertAuthSettings
 */
class RegisterCertificateRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     CertificateData: string,
     *     Type?: 'ClientCertAuth'|'ClientLDAPS',
     *     ClientCertAuthSettings?: Shapes\ClientCertAuthSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
