<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string|null $Url
 * @property Shapes\As2ConnectorConfig|null $As2Config
 * @property string|null $AccessRole
 * @property string|null $LoggingRole
 * @property Shapes\SftpConnectorConfig|null $SftpConfig
 * @property string|null $SecurityPolicyName
 */
class UpdateConnectorRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     Url?: string|null,
     *     As2Config?: Shapes\As2ConnectorConfig|null,
     *     AccessRole?: string|null,
     *     LoggingRole?: string|null,
     *     SftpConfig?: Shapes\SftpConnectorConfig|null,
     *     SecurityPolicyName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
