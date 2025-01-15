<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeApplicationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationVersionArn
 * @property string|null $ApplicationName
 * @property string|null $Description
 * @property string|null $VersionLabel
 * @property SourceBuildInformation|null $SourceBuildInformation
 * @property string|null $BuildArn
 * @property S3Location|null $SourceBundle
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateUpdated
 * @property 'Processed'|'Unprocessed'|'Failed'|'Processing'|'Building'|null $Status
 */
class ApplicationVersionDescription extends Shape
{
    /**
     * @param array{
     *     ApplicationVersionArn?: string|null,
     *     ApplicationName?: string|null,
     *     Description?: string|null,
     *     VersionLabel?: string|null,
     *     SourceBuildInformation?: SourceBuildInformation|null,
     *     BuildArn?: string|null,
     *     SourceBundle?: S3Location|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateUpdated?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'Processed'|'Unprocessed'|'Failed'|'Processing'|'Building'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
