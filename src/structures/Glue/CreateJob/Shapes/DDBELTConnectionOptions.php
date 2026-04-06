<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ddb'|'s3'|null $DynamodbExport
 * @property bool|null $DynamodbUnnestDDBJson
 * @property string $DynamodbTableArn
 * @property string|null $DynamodbS3Bucket
 * @property string|null $DynamodbS3Prefix
 * @property string|null $DynamodbS3BucketOwner
 * @property string|null $DynamodbStsRoleArn
 */
class DDBELTConnectionOptions extends Shape
{
    /**
     * @param array{
     *     DynamodbExport?: 'ddb'|'s3'|null,
     *     DynamodbUnnestDDBJson?: bool|null,
     *     DynamodbTableArn: string,
     *     DynamodbS3Bucket?: string|null,
     *     DynamodbS3Prefix?: string|null,
     *     DynamodbS3BucketOwner?: string|null,
     *     DynamodbStsRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
