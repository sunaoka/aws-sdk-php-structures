<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'AZURE' $Provider
 * @property ConnectorConfiguration $ConnectorConfiguration
 * @property string $RoleArn
 * @property string|null $Name
 * @property int|null $CreatedTimeStamp
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Provider: 'AZURE',
     *     ConnectorConfiguration: ConnectorConfiguration,
     *     RoleArn: string,
     *     Name?: string|null,
     *     CreatedTimeStamp?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
