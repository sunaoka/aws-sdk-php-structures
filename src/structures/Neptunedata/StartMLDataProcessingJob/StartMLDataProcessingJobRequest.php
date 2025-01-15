<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLDataProcessingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $id
 * @property string|null $previousDataProcessingJobId
 * @property string $inputDataS3Location
 * @property string $processedDataS3Location
 * @property string|null $sagemakerIamRoleArn
 * @property string|null $neptuneIamRoleArn
 * @property string|null $processingInstanceType
 * @property int|null $processingInstanceVolumeSizeInGB
 * @property int|null $processingTimeOutInSeconds
 * @property string|null $modelType
 * @property string|null $configFileName
 * @property list<string>|null $subnets
 * @property list<string>|null $securityGroupIds
 * @property string|null $volumeEncryptionKMSKey
 * @property string|null $s3OutputEncryptionKMSKey
 */
class StartMLDataProcessingJobRequest extends Request
{
    /**
     * @param array{
     *     id?: string|null,
     *     previousDataProcessingJobId?: string|null,
     *     inputDataS3Location: string,
     *     processedDataS3Location: string,
     *     sagemakerIamRoleArn?: string|null,
     *     neptuneIamRoleArn?: string|null,
     *     processingInstanceType?: string|null,
     *     processingInstanceVolumeSizeInGB?: int|null,
     *     processingTimeOutInSeconds?: int|null,
     *     modelType?: string|null,
     *     configFileName?: string|null,
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
