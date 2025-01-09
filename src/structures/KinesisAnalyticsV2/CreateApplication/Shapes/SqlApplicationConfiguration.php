<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Input> $Inputs
 * @property list<Output> $Outputs
 * @property list<ReferenceDataSource> $ReferenceDataSources
 */
class SqlApplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     Inputs?: list<Input>,
     *     Outputs?: list<Output>,
     *     ReferenceDataSources?: list<ReferenceDataSource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
