<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateAppBlockBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'WINDOWS_SERVER_2025'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|'UBUNTU_PRO_2404'|null $Platform
 * @property string|null $InstanceType
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property bool|null $EnableDefaultInternetAccess
 * @property string|null $IamRoleArn
 * @property list<Shapes\AccessEndpoint>|null $AccessEndpoints
 * @property list<'IAM_ROLE_ARN'|'ACCESS_ENDPOINTS'|'VPC_CONFIGURATION_SECURITY_GROUP_IDS'>|null $AttributesToDelete
 * @property bool|null $DisableIMDSV1
 */
class UpdateAppBlockBuilderRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'WINDOWS_SERVER_2025'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|'UBUNTU_PRO_2404'|null,
     *     InstanceType?: string|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     EnableDefaultInternetAccess?: bool|null,
     *     IamRoleArn?: string|null,
     *     AccessEndpoints?: list<Shapes\AccessEndpoint>|null,
     *     AttributesToDelete?: list<'IAM_ROLE_ARN'|'ACCESS_ENDPOINTS'|'VPC_CONFIGURATION_SECURITY_GROUP_IDS'>|null,
     *     DisableIMDSV1?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
