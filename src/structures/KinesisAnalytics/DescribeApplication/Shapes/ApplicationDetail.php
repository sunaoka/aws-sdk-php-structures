<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationName
 * @property string $ApplicationDescription
 * @property string $ApplicationARN
 * @property 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING' $ApplicationStatus
 * @property \Aws\Api\DateTimeResult $CreateTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdateTimestamp
 * @property list<InputDescription> $InputDescriptions
 * @property list<OutputDescription> $OutputDescriptions
 * @property list<ReferenceDataSourceDescription> $ReferenceDataSourceDescriptions
 * @property list<CloudWatchLoggingOptionDescription> $CloudWatchLoggingOptionDescriptions
 * @property string $ApplicationCode
 * @property int $ApplicationVersionId
 */
class ApplicationDetail extends Shape
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationDescription?: string,
     *     ApplicationARN: string,
     *     ApplicationStatus: 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING',
     *     CreateTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult,
     *     InputDescriptions?: list<InputDescription>,
     *     OutputDescriptions?: list<OutputDescription>,
     *     ReferenceDataSourceDescriptions?: list<ReferenceDataSourceDescription>,
     *     CloudWatchLoggingOptionDescriptions?: list<CloudWatchLoggingOptionDescription>,
     *     ApplicationCode?: string,
     *     ApplicationVersionId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
