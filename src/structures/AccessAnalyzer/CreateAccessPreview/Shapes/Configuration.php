<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsSnapshotConfiguration|null $ebsSnapshot
 * @property EcrRepositoryConfiguration|null $ecrRepository
 * @property IamRoleConfiguration|null $iamRole
 * @property EfsFileSystemConfiguration|null $efsFileSystem
 * @property KmsKeyConfiguration|null $kmsKey
 * @property RdsDbClusterSnapshotConfiguration|null $rdsDbClusterSnapshot
 * @property RdsDbSnapshotConfiguration|null $rdsDbSnapshot
 * @property SecretsManagerSecretConfiguration|null $secretsManagerSecret
 * @property S3BucketConfiguration|null $s3Bucket
 * @property SnsTopicConfiguration|null $snsTopic
 * @property SqsQueueConfiguration|null $sqsQueue
 * @property S3ExpressDirectoryBucketConfiguration|null $s3ExpressDirectoryBucket
 * @property DynamodbStreamConfiguration|null $dynamodbStream
 * @property DynamodbTableConfiguration|null $dynamodbTable
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     ebsSnapshot?: EbsSnapshotConfiguration|null,
     *     ecrRepository?: EcrRepositoryConfiguration|null,
     *     iamRole?: IamRoleConfiguration|null,
     *     efsFileSystem?: EfsFileSystemConfiguration|null,
     *     kmsKey?: KmsKeyConfiguration|null,
     *     rdsDbClusterSnapshot?: RdsDbClusterSnapshotConfiguration|null,
     *     rdsDbSnapshot?: RdsDbSnapshotConfiguration|null,
     *     secretsManagerSecret?: SecretsManagerSecretConfiguration|null,
     *     s3Bucket?: S3BucketConfiguration|null,
     *     snsTopic?: SnsTopicConfiguration|null,
     *     sqsQueue?: SqsQueueConfiguration|null,
     *     s3ExpressDirectoryBucket?: S3ExpressDirectoryBucketConfiguration|null,
     *     dynamodbStream?: DynamodbStreamConfiguration|null,
     *     dynamodbTable?: DynamodbTableConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
