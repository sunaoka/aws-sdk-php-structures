<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InputUpdate>|null $InputUpdates
 * @property string|null $ApplicationCodeUpdate
 * @property list<OutputUpdate>|null $OutputUpdates
 * @property list<ReferenceDataSourceUpdate>|null $ReferenceDataSourceUpdates
 * @property list<CloudWatchLoggingOptionUpdate>|null $CloudWatchLoggingOptionUpdates
 */
class ApplicationUpdate extends Shape
{
    /**
     * @param array{
     *     InputUpdates?: list<InputUpdate>|null,
     *     ApplicationCodeUpdate?: string|null,
     *     OutputUpdates?: list<OutputUpdate>|null,
     *     ReferenceDataSourceUpdates?: list<ReferenceDataSourceUpdate>|null,
     *     CloudWatchLoggingOptionUpdates?: list<CloudWatchLoggingOptionUpdate>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
