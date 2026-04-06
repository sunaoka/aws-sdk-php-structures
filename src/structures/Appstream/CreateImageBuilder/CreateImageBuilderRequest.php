<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImageBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ImageName
 * @property string|null $ImageArn
 * @property string $InstanceType
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property string|null $IamRoleArn
 * @property bool|null $EnableDefaultInternetAccess
 * @property Shapes\DomainJoinInfo|null $DomainJoinInfo
 * @property string|null $AppstreamAgentVersion
 * @property array<string, string>|null $Tags
 * @property list<Shapes\AccessEndpoint>|null $AccessEndpoints
 */
class CreateImageBuilderRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ImageName?: string|null,
     *     ImageArn?: string|null,
     *     InstanceType: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     IamRoleArn?: string|null,
     *     EnableDefaultInternetAccess?: bool|null,
     *     DomainJoinInfo?: Shapes\DomainJoinInfo|null,
     *     AppstreamAgentVersion?: string|null,
     *     Tags?: array<string, string>|null,
     *     AccessEndpoints?: list<Shapes\AccessEndpoint>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
