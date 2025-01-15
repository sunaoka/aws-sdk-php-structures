<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetVpcLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string $Name
 * @property list<string> $SecurityGroupIds
 * @property list<string> $SubnetIds
 * @property array<string, string>|null $Tags
 * @property string $VpcLinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'FAILED'|'INACTIVE'|null $VpcLinkStatus
 * @property string|null $VpcLinkStatusMessage
 * @property 'V2'|null $VpcLinkVersion
 */
class VpcLink extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     Name: string,
     *     SecurityGroupIds: list<string>,
     *     SubnetIds: list<string>,
     *     Tags?: array<string, string>|null,
     *     VpcLinkId: string,
     *     VpcLinkStatus?: 'PENDING'|'AVAILABLE'|'DELETING'|'FAILED'|'INACTIVE'|null,
     *     VpcLinkStatusMessage?: string|null,
     *     VpcLinkVersion?: 'V2'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
