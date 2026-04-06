<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $ConnectorId
 * @property string|null $Url
 * @property As2ConnectorConfig|null $As2Config
 * @property string|null $AccessRole
 * @property string|null $LoggingRole
 * @property list<Tag>|null $Tags
 * @property SftpConnectorConfig|null $SftpConfig
 * @property list<string>|null $ServiceManagedEgressIpAddresses
 * @property string|null $SecurityPolicyName
 * @property DescribedConnectorEgressConfig|null $EgressConfig
 * @property 'SERVICE_MANAGED'|'VPC_LATTICE' $EgressType
 * @property string|null $ErrorMessage
 * @property 'ACTIVE'|'ERRORED'|'PENDING' $Status
 */
class DescribedConnector extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     ConnectorId?: string|null,
     *     Url?: string|null,
     *     As2Config?: As2ConnectorConfig|null,
     *     AccessRole?: string|null,
     *     LoggingRole?: string|null,
     *     Tags?: list<Tag>|null,
     *     SftpConfig?: SftpConnectorConfig|null,
     *     ServiceManagedEgressIpAddresses?: list<string>|null,
     *     SecurityPolicyName?: string|null,
     *     EgressConfig?: DescribedConnectorEgressConfig|null,
     *     EgressType: 'SERVICE_MANAGED'|'VPC_LATTICE',
     *     ErrorMessage?: string|null,
     *     Status: 'ACTIVE'|'ERRORED'|'PENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
