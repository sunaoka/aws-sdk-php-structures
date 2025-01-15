<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InputUpdate>|null $InputUpdates
 * @property list<OutputUpdate>|null $OutputUpdates
 * @property list<ReferenceDataSourceUpdate>|null $ReferenceDataSourceUpdates
 */
class SqlApplicationConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     InputUpdates?: list<InputUpdate>|null,
     *     OutputUpdates?: list<OutputUpdate>|null,
     *     ReferenceDataSourceUpdates?: list<ReferenceDataSourceUpdate>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
