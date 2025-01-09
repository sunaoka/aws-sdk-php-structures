<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string $Url
 * @property Shapes\As2ConnectorConfig $As2Config
 * @property string $AccessRole
 * @property string $LoggingRole
 * @property Shapes\SftpConnectorConfig $SftpConfig
 * @property string $SecurityPolicyName
 */
class UpdateConnectorRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     Url?: string,
     *     As2Config?: Shapes\As2ConnectorConfig,
     *     AccessRole?: string,
     *     LoggingRole?: string,
     *     SftpConfig?: Shapes\SftpConnectorConfig,
     *     SecurityPolicyName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
