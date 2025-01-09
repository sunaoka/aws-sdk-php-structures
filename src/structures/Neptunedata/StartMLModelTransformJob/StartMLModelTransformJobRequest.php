<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLModelTransformJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $dataProcessingJobId
 * @property string $mlModelTrainingJobId
 * @property string $trainingJobName
 * @property string $modelTransformOutputS3Location
 * @property string $sagemakerIamRoleArn
 * @property string $neptuneIamRoleArn
 * @property Shapes\CustomModelTransformParameters $customModelTransformParameters
 * @property string $baseProcessingInstanceType
 * @property int $baseProcessingInstanceVolumeSizeInGB
 * @property list<string> $subnets
 * @property list<string> $securityGroupIds
 * @property string $volumeEncryptionKMSKey
 * @property string $s3OutputEncryptionKMSKey
 */
class StartMLModelTransformJobRequest extends Request
{
    /**
     * @param array{
     *     id?: string,
     *     dataProcessingJobId?: string,
     *     mlModelTrainingJobId?: string,
     *     trainingJobName?: string,
     *     modelTransformOutputS3Location: string,
     *     sagemakerIamRoleArn?: string,
     *     neptuneIamRoleArn?: string,
     *     customModelTransformParameters?: Shapes\CustomModelTransformParameters,
     *     baseProcessingInstanceType?: string,
     *     baseProcessingInstanceVolumeSizeInGB?: int,
     *     subnets?: list<string>,
     *     securityGroupIds?: list<string>,
     *     volumeEncryptionKMSKey?: string,
     *     s3OutputEncryptionKMSKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
