<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Input>|null $Inputs
 * @property list<Output>|null $Outputs
 * @property list<ReferenceDataSource>|null $ReferenceDataSources
 */
class SqlApplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     Inputs?: list<Input>|null,
     *     Outputs?: list<Output>|null,
     *     ReferenceDataSources?: list<ReferenceDataSource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
