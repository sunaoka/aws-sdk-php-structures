<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeApplicationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationVersionArn
 * @property string $ApplicationName
 * @property string $Description
 * @property string $VersionLabel
 * @property SourceBuildInformation $SourceBuildInformation
 * @property string $BuildArn
 * @property S3Location $SourceBundle
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateUpdated
 * @property 'Processed'|'Unprocessed'|'Failed'|'Processing'|'Building' $Status
 */
class ApplicationVersionDescription extends Shape
{
    /**
     * @param array{
     *     ApplicationVersionArn?: string,
     *     ApplicationName?: string,
     *     Description?: string,
     *     VersionLabel?: string,
     *     SourceBuildInformation?: SourceBuildInformation,
     *     BuildArn?: string,
     *     SourceBundle?: S3Location,
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateUpdated?: \Aws\Api\DateTimeResult,
     *     Status?: 'Processed'|'Unprocessed'|'Failed'|'Processing'|'Building'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
