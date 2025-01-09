<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlockBuilders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $DisplayName
 * @property string $Description
 * @property 'WINDOWS_SERVER_2019' $Platform
 * @property string $InstanceType
 * @property bool $EnableDefaultInternetAccess
 * @property string $IamRoleArn
 * @property VpcConfig $VpcConfig
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED' $State
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property list<ResourceError> $AppBlockBuilderErrors
 * @property AppBlockBuilderStateChangeReason $StateChangeReason
 * @property list<AccessEndpoint> $AccessEndpoints
 */
class AppBlockBuilder extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     Platform: 'WINDOWS_SERVER_2019',
     *     InstanceType: string,
     *     EnableDefaultInternetAccess?: bool,
     *     IamRoleArn?: string,
     *     VpcConfig: VpcConfig,
     *     State: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     AppBlockBuilderErrors?: list<ResourceError>,
     *     StateChangeReason?: AppBlockBuilderStateChangeReason,
     *     AccessEndpoints?: list<AccessEndpoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
