<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaInvokeOperation|null $LambdaInvoke
 * @property S3CopyObjectOperation|null $S3PutObjectCopy
 * @property S3SetObjectAclOperation|null $S3PutObjectAcl
 * @property S3SetObjectTaggingOperation|null $S3PutObjectTagging
 * @property S3DeleteObjectTaggingOperation|null $S3DeleteObjectTagging
 * @property S3InitiateRestoreObjectOperation|null $S3InitiateRestoreObject
 * @property S3SetObjectLegalHoldOperation|null $S3PutObjectLegalHold
 * @property S3SetObjectRetentionOperation|null $S3PutObjectRetention
 * @property S3ReplicateObjectOperation|null $S3ReplicateObject
 */
class JobOperation extends Shape
{
    /**
     * @param array{
     *     LambdaInvoke?: LambdaInvokeOperation|null,
     *     S3PutObjectCopy?: S3CopyObjectOperation|null,
     *     S3PutObjectAcl?: S3SetObjectAclOperation|null,
     *     S3PutObjectTagging?: S3SetObjectTaggingOperation|null,
     *     S3DeleteObjectTagging?: S3DeleteObjectTaggingOperation|null,
     *     S3InitiateRestoreObject?: S3InitiateRestoreObjectOperation|null,
     *     S3PutObjectLegalHold?: S3SetObjectLegalHoldOperation|null,
     *     S3PutObjectRetention?: S3SetObjectRetentionOperation|null,
     *     S3ReplicateObject?: S3ReplicateObjectOperation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
