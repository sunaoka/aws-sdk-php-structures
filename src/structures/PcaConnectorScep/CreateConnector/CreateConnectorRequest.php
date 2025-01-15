<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property Shapes\MobileDeviceManagement|null $MobileDeviceManagement
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     MobileDeviceManagement?: Shapes\MobileDeviceManagement|null,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
