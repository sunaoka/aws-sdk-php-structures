<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaInvokeOperation $LambdaInvoke
 * @property S3CopyObjectOperation $S3PutObjectCopy
 * @property S3SetObjectAclOperation $S3PutObjectAcl
 * @property S3SetObjectTaggingOperation $S3PutObjectTagging
 * @property S3DeleteObjectTaggingOperation $S3DeleteObjectTagging
 * @property S3InitiateRestoreObjectOperation $S3InitiateRestoreObject
 * @property S3SetObjectLegalHoldOperation $S3PutObjectLegalHold
 * @property S3SetObjectRetentionOperation $S3PutObjectRetention
 * @property S3ReplicateObjectOperation $S3ReplicateObject
 */
class JobOperation extends Shape
{
    /**
     * @param array{
     *     LambdaInvoke?: LambdaInvokeOperation,
     *     S3PutObjectCopy?: S3CopyObjectOperation,
     *     S3PutObjectAcl?: S3SetObjectAclOperation,
     *     S3PutObjectTagging?: S3SetObjectTaggingOperation,
     *     S3DeleteObjectTagging?: S3DeleteObjectTaggingOperation,
     *     S3InitiateRestoreObject?: S3InitiateRestoreObjectOperation,
     *     S3PutObjectLegalHold?: S3SetObjectLegalHoldOperation,
     *     S3PutObjectRetention?: S3SetObjectRetentionOperation,
     *     S3ReplicateObject?: S3ReplicateObjectOperation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
