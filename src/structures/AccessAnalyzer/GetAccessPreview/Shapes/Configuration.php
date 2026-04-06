<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

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
     *     sqsQueue?: SqsQueueConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
