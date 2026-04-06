<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Url
 * @property Shapes\As2ConnectorConfig|null $As2Config
 * @property string $AccessRole
 * @property string|null $LoggingRole
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\SftpConnectorConfig|null $SftpConfig
 * @property string|null $SecurityPolicyName
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     Url: string,
     *     As2Config?: Shapes\As2ConnectorConfig|null,
     *     AccessRole: string,
     *     LoggingRole?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SftpConfig?: Shapes\SftpConnectorConfig|null,
     *     SecurityPolicyName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
