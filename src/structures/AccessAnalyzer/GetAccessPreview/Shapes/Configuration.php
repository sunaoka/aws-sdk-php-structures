<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsSnapshotConfiguration $ebsSnapshot
 * @property EcrRepositoryConfiguration $ecrRepository
 * @property IamRoleConfiguration $iamRole
 * @property EfsFileSystemConfiguration $efsFileSystem
 * @property KmsKeyConfiguration $kmsKey
 * @property RdsDbClusterSnapshotConfiguration $rdsDbClusterSnapshot
 * @property RdsDbSnapshotConfiguration $rdsDbSnapshot
 * @property SecretsManagerSecretConfiguration $secretsManagerSecret
 * @property S3BucketConfiguration $s3Bucket
 * @property SnsTopicConfiguration $snsTopic
 * @property SqsQueueConfiguration $sqsQueue
 * @property S3ExpressDirectoryBucketConfiguration $s3ExpressDirectoryBucket
 * @property DynamodbStreamConfiguration $dynamodbStream
 * @property DynamodbTableConfiguration $dynamodbTable
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     ebsSnapshot?: EbsSnapshotConfiguration,
     *     ecrRepository?: EcrRepositoryConfiguration,
     *     iamRole?: IamRoleConfiguration,
     *     efsFileSystem?: EfsFileSystemConfiguration,
     *     kmsKey?: KmsKeyConfiguration,
     *     rdsDbClusterSnapshot?: RdsDbClusterSnapshotConfiguration,
     *     rdsDbSnapshot?: RdsDbSnapshotConfiguration,
     *     secretsManagerSecret?: SecretsManagerSecretConfiguration,
     *     s3Bucket?: S3BucketConfiguration,
     *     snsTopic?: SnsTopicConfiguration,
     *     sqsQueue?: SqsQueueConfiguration,
     *     s3ExpressDirectoryBucket?: S3ExpressDirectoryBucketConfiguration,
     *     dynamodbStream?: DynamodbStreamConfiguration,
     *     dynamodbTable?: DynamodbTableConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
