<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLModelTrainingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $previousModelTrainingJobId
 * @property string $dataProcessingJobId
 * @property string $trainModelS3Location
 * @property string $sagemakerIamRoleArn
 * @property string $neptuneIamRoleArn
 * @property string $baseProcessingInstanceType
 * @property string $trainingInstanceType
 * @property int $trainingInstanceVolumeSizeInGB
 * @property int $trainingTimeOutInSeconds
 * @property int $maxHPONumberOfTrainingJobs
 * @property int $maxHPOParallelTrainingJobs
 * @property list<string> $subnets
 * @property list<string> $securityGroupIds
 * @property string $volumeEncryptionKMSKey
 * @property string $s3OutputEncryptionKMSKey
 * @property bool $enableManagedSpotTraining
 * @property Shapes\CustomModelTrainingParameters $customModelTrainingParameters
 */
class StartMLModelTrainingJobRequest extends Request
{
    /**
     * @param array{
     *     id?: string,
     *     previousModelTrainingJobId?: string,
     *     dataProcessingJobId: string,
     *     trainModelS3Location: string,
     *     sagemakerIamRoleArn?: string,
     *     neptuneIamRoleArn?: string,
     *     baseProcessingInstanceType?: string,
     *     trainingInstanceType?: string,
     *     trainingInstanceVolumeSizeInGB?: int,
     *     trainingTimeOutInSeconds?: int,
     *     maxHPONumberOfTrainingJobs?: int,
     *     maxHPOParallelTrainingJobs?: int,
     *     subnets?: list<string>,
     *     securityGroupIds?: list<string>,
     *     volumeEncryptionKMSKey?: string,
     *     s3OutputEncryptionKMSKey?: string,
     *     enableManagedSpotTraining?: bool,
     *     customModelTrainingParameters?: Shapes\CustomModelTrainingParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
