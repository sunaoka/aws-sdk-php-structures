<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlockBuilders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property 'WINDOWS_SERVER_2019' $Platform
 * @property string $InstanceType
 * @property bool|null $EnableDefaultInternetAccess
 * @property string|null $IamRoleArn
 * @property VpcConfig $VpcConfig
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED' $State
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property list<ResourceError>|null $AppBlockBuilderErrors
 * @property AppBlockBuilderStateChangeReason|null $StateChangeReason
 * @property list<AccessEndpoint>|null $AccessEndpoints
 * @property bool|null $DisableIMDSV1
 */
class AppBlockBuilder extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     Platform: 'WINDOWS_SERVER_2019',
     *     InstanceType: string,
     *     EnableDefaultInternetAccess?: bool|null,
     *     IamRoleArn?: string|null,
     *     VpcConfig: VpcConfig,
     *     State: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED',
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     AppBlockBuilderErrors?: list<ResourceError>|null,
     *     StateChangeReason?: AppBlockBuilderStateChangeReason|null,
     *     AccessEndpoints?: list<AccessEndpoint>|null,
     *     DisableIMDSV1?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
