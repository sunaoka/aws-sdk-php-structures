<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property Shapes\MobileDeviceManagement $MobileDeviceManagement
 * @property string $ClientToken
 * @property array<string, string> $Tags
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     MobileDeviceManagement?: Shapes\MobileDeviceManagement,
     *     ClientToken?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
