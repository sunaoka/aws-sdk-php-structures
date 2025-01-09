<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InputUpdate> $InputUpdates
 * @property string $ApplicationCodeUpdate
 * @property list<OutputUpdate> $OutputUpdates
 * @property list<ReferenceDataSourceUpdate> $ReferenceDataSourceUpdates
 * @property list<CloudWatchLoggingOptionUpdate> $CloudWatchLoggingOptionUpdates
 */
class ApplicationUpdate extends Shape
{
    /**
     * @param array{
     *     InputUpdates?: list<InputUpdate>,
     *     ApplicationCodeUpdate?: string,
     *     OutputUpdates?: list<OutputUpdate>,
     *     ReferenceDataSourceUpdates?: list<ReferenceDataSourceUpdate>,
     *     CloudWatchLoggingOptionUpdates?: list<CloudWatchLoggingOptionUpdate>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
