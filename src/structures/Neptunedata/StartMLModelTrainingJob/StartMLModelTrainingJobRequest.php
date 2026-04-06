<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLModelTrainingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $id
 * @property string|null $previousModelTrainingJobId
 * @property string $dataProcessingJobId
 * @property string $trainModelS3Location
 * @property string|null $sagemakerIamRoleArn
 * @property string|null $neptuneIamRoleArn
 * @property string|null $baseProcessingInstanceType
 * @property string|null $trainingInstanceType
 * @property int|null $trainingInstanceVolumeSizeInGB
 * @property int|null $trainingTimeOutInSeconds
 * @property int|null $maxHPONumberOfTrainingJobs
 * @property int|null $maxHPOParallelTrainingJobs
 * @property list<string>|null $subnets
 * @property list<string>|null $securityGroupIds
 * @property string|null $volumeEncryptionKMSKey
 * @property string|null $s3OutputEncryptionKMSKey
 * @property bool|null $enableManagedSpotTraining
 * @property Shapes\CustomModelTrainingParameters|null $customModelTrainingParameters
 */
class StartMLModelTrainingJobRequest extends Request
{
    /**
     * @param array{
     *     id?: string|null,
     *     previousModelTrainingJobId?: string|null,
     *     dataProcessingJobId: string,
     *     trainModelS3Location: string,
     *     sagemakerIamRoleArn?: string|null,
     *     neptuneIamRoleArn?: string|null,
     *     baseProcessingInstanceType?: string|null,
     *     trainingInstanceType?: string|null,
     *     trainingInstanceVolumeSizeInGB?: int|null,
     *     trainingTimeOutInSeconds?: int|null,
     *     maxHPONumberOfTrainingJobs?: int|null,
     *     maxHPOParallelTrainingJobs?: int|null,
     *     subnets?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     volumeEncryptionKMSKey?: string|null,
     *     s3OutputEncryptionKMSKey?: string|null,
     *     enableManagedSpotTraining?: bool|null,
     *     customModelTrainingParameters?: Shapes\CustomModelTrainingParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
