<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InputDescription> $InputDescriptions
 * @property list<OutputDescription> $OutputDescriptions
 * @property list<ReferenceDataSourceDescription> $ReferenceDataSourceDescriptions
 */
class SqlApplicationConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     InputDescriptions?: list<InputDescription>,
     *     OutputDescriptions?: list<OutputDescription>,
     *     ReferenceDataSourceDescriptions?: list<ReferenceDataSourceDescription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
