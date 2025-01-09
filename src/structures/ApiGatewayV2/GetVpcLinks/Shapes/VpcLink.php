<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetVpcLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $Name
 * @property list<string> $SecurityGroupIds
 * @property list<string> $SubnetIds
 * @property array<string, string> $Tags
 * @property string $VpcLinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'FAILED'|'INACTIVE' $VpcLinkStatus
 * @property string $VpcLinkStatusMessage
 * @property 'V2' $VpcLinkVersion
 */
class VpcLink extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     SecurityGroupIds: list<string>,
     *     SubnetIds: list<string>,
     *     Tags?: array<string, string>,
     *     VpcLinkId: string,
     *     VpcLinkStatus?: 'PENDING'|'AVAILABLE'|'DELETING'|'FAILED'|'INACTIVE',
     *     VpcLinkStatusMessage?: string,
     *     VpcLinkVersion?: 'V2'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
