<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property 'AZURE' $provider
 * @property string $tenantIdentifier
 * @property \Aws\Api\DateTimeResult $createdTime
 */
class ConnectorSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     provider: 'AZURE',
     *     tenantIdentifier: string,
     *     createdTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
