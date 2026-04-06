<?php

namespace Sunaoka\Aws\Structures\Transfer\ListWebApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $WebAppId
 * @property string|null $AccessEndpoint
 * @property string|null $WebAppEndpoint
 * @property 'PUBLIC'|'VPC'|null $EndpointType
 */
class ListedWebApp extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     WebAppId: string,
     *     AccessEndpoint?: string|null,
     *     WebAppEndpoint?: string|null,
     *     EndpointType?: 'PUBLIC'|'VPC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
