<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLModelTransformJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $id
 * @property string|null $dataProcessingJobId
 * @property string|null $mlModelTrainingJobId
 * @property string|null $trainingJobName
 * @property string $modelTransformOutputS3Location
 * @property string|null $sagemakerIamRoleArn
 * @property string|null $neptuneIamRoleArn
 * @property Shapes\CustomModelTransformParameters|null $customModelTransformParameters
 * @property string|null $baseProcessingInstanceType
 * @property int|null $baseProcessingInstanceVolumeSizeInGB
 * @property list<string>|null $subnets
 * @property list<string>|null $securityGroupIds
 * @property string|null $volumeEncryptionKMSKey
 * @property string|null $s3OutputEncryptionKMSKey
 */
class StartMLModelTransformJobRequest extends Request
{
    /**
     * @param array{
     *     id?: string|null,
     *     dataProcessingJobId?: string|null,
     *     mlModelTrainingJobId?: string|null,
     *     trainingJobName?: string|null,
     *     modelTransformOutputS3Location: string,
     *     sagemakerIamRoleArn?: string|null,
     *     neptuneIamRoleArn?: string|null,
     *     customModelTransformParameters?: Shapes\CustomModelTransformParameters|null,
     *     baseProcessingInstanceType?: string|null,
     *     baseProcessingInstanceVolumeSizeInGB?: int|null,
     *     subnets?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     volumeEncryptionKMSKey?: string|null,
     *     s3OutputEncryptionKMSKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
