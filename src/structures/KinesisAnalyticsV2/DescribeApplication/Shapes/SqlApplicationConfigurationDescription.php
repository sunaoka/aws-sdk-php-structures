<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InputDescription>|null $InputDescriptions
 * @property list<OutputDescription>|null $OutputDescriptions
 * @property list<ReferenceDataSourceDescription>|null $ReferenceDataSourceDescriptions
 */
class SqlApplicationConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     InputDescriptions?: list<InputDescription>|null,
     *     OutputDescriptions?: list<OutputDescription>|null,
     *     ReferenceDataSourceDescriptions?: list<ReferenceDataSourceDescription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
