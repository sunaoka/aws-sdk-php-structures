<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RegisterCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $CertificateData
 * @property 'ClientCertAuth'|'ClientLDAPS'|null $Type
 * @property Shapes\ClientCertAuthSettings|null $ClientCertAuthSettings
 */
class RegisterCertificateRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     CertificateData: string,
     *     Type?: 'ClientCertAuth'|'ClientLDAPS'|null,
     *     ClientCertAuthSettings?: Shapes\ClientCertAuthSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
