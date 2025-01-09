<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImageBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ImageName
 * @property string $ImageArn
 * @property string $InstanceType
 * @property string $Description
 * @property string $DisplayName
 * @property Shapes\VpcConfig $VpcConfig
 * @property string $IamRoleArn
 * @property bool $EnableDefaultInternetAccess
 * @property Shapes\DomainJoinInfo $DomainJoinInfo
 * @property string $AppstreamAgentVersion
 * @property array<string, string> $Tags
 * @property list<Shapes\AccessEndpoint> $AccessEndpoints
 */
class CreateImageBuilderRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ImageName?: string,
     *     ImageArn?: string,
     *     InstanceType: string,
     *     Description?: string,
     *     DisplayName?: string,
     *     VpcConfig?: Shapes\VpcConfig,
     *     IamRoleArn?: string,
     *     EnableDefaultInternetAccess?: bool,
     *     DomainJoinInfo?: Shapes\DomainJoinInfo,
     *     AppstreamAgentVersion?: string,
     *     Tags?: array<string, string>,
     *     AccessEndpoints?: list<Shapes\AccessEndpoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
