<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateAppBlockBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $DisplayName
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8' $Platform
 * @property string $InstanceType
 * @property Shapes\VpcConfig $VpcConfig
 * @property bool $EnableDefaultInternetAccess
 * @property string $IamRoleArn
 * @property list<Shapes\AccessEndpoint> $AccessEndpoints
 * @property list<'IAM_ROLE_ARN'|'ACCESS_ENDPOINTS'|'VPC_CONFIGURATION_SECURITY_GROUP_IDS'> $AttributesToDelete
 */
class UpdateAppBlockBuilderRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     DisplayName?: string,
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8',
     *     InstanceType?: string,
     *     VpcConfig?: Shapes\VpcConfig,
     *     EnableDefaultInternetAccess?: bool,
     *     IamRoleArn?: string,
     *     AccessEndpoints?: list<Shapes\AccessEndpoint>,
     *     AttributesToDelete?: list<'IAM_ROLE_ARN'|'ACCESS_ENDPOINTS'|'VPC_CONFIGURATION_SECURITY_GROUP_IDS'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
