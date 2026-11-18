<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'AZURE' $Provider
 * @property string|null $Name
 * @property int|null $CreatedTimeStamp
 */
class ConnectorSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Provider: 'AZURE',
     *     Name?: string|null,
     *     CreatedTimeStamp?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
