<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationName
 * @property string|null $ApplicationDescription
 * @property string $ApplicationARN
 * @property 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING' $ApplicationStatus
 * @property \Aws\Api\DateTimeResult|null $CreateTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTimestamp
 * @property list<InputDescription>|null $InputDescriptions
 * @property list<OutputDescription>|null $OutputDescriptions
 * @property list<ReferenceDataSourceDescription>|null $ReferenceDataSourceDescriptions
 * @property list<CloudWatchLoggingOptionDescription>|null $CloudWatchLoggingOptionDescriptions
 * @property string|null $ApplicationCode
 * @property int<1, 999999999> $ApplicationVersionId
 */
class ApplicationDetail extends Shape
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationDescription?: string|null,
     *     ApplicationARN: string,
     *     ApplicationStatus: 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING',
     *     CreateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     InputDescriptions?: list<InputDescription>|null,
     *     OutputDescriptions?: list<OutputDescription>|null,
     *     ReferenceDataSourceDescriptions?: list<ReferenceDataSourceDescription>|null,
     *     CloudWatchLoggingOptionDescriptions?: list<CloudWatchLoggingOptionDescription>|null,
     *     ApplicationCode?: string|null,
     *     ApplicationVersionId: int<1, 999999999>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
