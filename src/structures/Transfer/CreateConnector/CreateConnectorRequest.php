<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Url
 * @property Shapes\As2ConnectorConfig $As2Config
 * @property string $AccessRole
 * @property string $LoggingRole
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\SftpConnectorConfig $SftpConfig
 * @property string $SecurityPolicyName
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     Url: string,
     *     As2Config?: Shapes\As2ConnectorConfig,
     *     AccessRole: string,
     *     LoggingRole?: string,
     *     Tags?: list<Shapes\Tag>,
     *     SftpConfig?: Shapes\SftpConnectorConfig,
     *     SecurityPolicyName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
