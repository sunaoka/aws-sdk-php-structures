<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ConnectorId
 * @property string $Url
 * @property As2ConnectorConfig $As2Config
 * @property string $AccessRole
 * @property string $LoggingRole
 * @property list<Tag> $Tags
 * @property SftpConnectorConfig $SftpConfig
 * @property list<string> $ServiceManagedEgressIpAddresses
 * @property string $SecurityPolicyName
 */
class DescribedConnector extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     ConnectorId?: string,
     *     Url?: string,
     *     As2Config?: As2ConnectorConfig,
     *     AccessRole?: string,
     *     LoggingRole?: string,
     *     Tags?: list<Tag>,
     *     SftpConfig?: SftpConnectorConfig,
     *     ServiceManagedEgressIpAddresses?: list<string>,
     *     SecurityPolicyName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
