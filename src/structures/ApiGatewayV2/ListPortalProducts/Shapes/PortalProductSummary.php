<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListPortalProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $DisplayName
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $PortalProductArn
 * @property string $PortalProductId
 * @property array<string, string>|null $Tags
 */
class PortalProductSummary extends Shape
{
    /**
     * @param array{
     *     Description: string,
     *     DisplayName: string,
     *     LastModified: \Aws\Api\DateTimeResult,
     *     PortalProductArn: string,
     *     PortalProductId: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
