<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InputUpdate> $InputUpdates
 * @property list<OutputUpdate> $OutputUpdates
 * @property list<ReferenceDataSourceUpdate> $ReferenceDataSourceUpdates
 */
class SqlApplicationConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     InputUpdates?: list<InputUpdate>,
     *     OutputUpdates?: list<OutputUpdate>,
     *     ReferenceDataSourceUpdates?: list<ReferenceDataSourceUpdate>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
