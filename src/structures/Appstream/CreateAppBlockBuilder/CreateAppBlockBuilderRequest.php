<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateAppBlockBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $DisplayName
 * @property array<string, string> $Tags
 * @property 'WINDOWS_SERVER_2019' $Platform
 * @property string $InstanceType
 * @property Shapes\VpcConfig $VpcConfig
 * @property bool $EnableDefaultInternetAccess
 * @property string $IamRoleArn
 * @property list<Shapes\AccessEndpoint> $AccessEndpoints
 */
class CreateAppBlockBuilderRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     DisplayName?: string,
     *     Tags?: array<string, string>,
     *     Platform: 'WINDOWS_SERVER_2019',
     *     InstanceType: string,
     *     VpcConfig: Shapes\VpcConfig,
     *     EnableDefaultInternetAccess?: bool,
     *     IamRoleArn?: string,
     *     AccessEndpoints?: list<Shapes\AccessEndpoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
