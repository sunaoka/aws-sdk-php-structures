<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateAppBlockBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property array<string, string>|null $Tags
 * @property 'WINDOWS_SERVER_2019' $Platform
 * @property string $InstanceType
 * @property Shapes\VpcConfig $VpcConfig
 * @property bool|null $EnableDefaultInternetAccess
 * @property string|null $IamRoleArn
 * @property list<Shapes\AccessEndpoint>|null $AccessEndpoints
 */
class CreateAppBlockBuilderRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     Tags?: array<string, string>|null,
     *     Platform: 'WINDOWS_SERVER_2019',
     *     InstanceType: string,
     *     VpcConfig: Shapes\VpcConfig,
     *     EnableDefaultInternetAccess?: bool|null,
     *     IamRoleArn?: string|null,
     *     AccessEndpoints?: list<Shapes\AccessEndpoint>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
