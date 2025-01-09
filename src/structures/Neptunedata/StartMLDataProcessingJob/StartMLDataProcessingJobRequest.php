<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLDataProcessingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $previousDataProcessingJobId
 * @property string $inputDataS3Location
 * @property string $processedDataS3Location
 * @property string $sagemakerIamRoleArn
 * @property string $neptuneIamRoleArn
 * @property string $processingInstanceType
 * @property int $processingInstanceVolumeSizeInGB
 * @property int $processingTimeOutInSeconds
 * @property string $modelType
 * @property string $configFileName
 * @property list<string> $subnets
 * @property list<string> $securityGroupIds
 * @property string $volumeEncryptionKMSKey
 * @property string $s3OutputEncryptionKMSKey
 */
class StartMLDataProcessingJobRequest extends Request
{
    /**
     * @param array{
     *     id?: string,
     *     previousDataProcessingJobId?: string,
     *     inputDataS3Location: string,
     *     processedDataS3Location: string,
     *     sagemakerIamRoleArn?: string,
     *     neptuneIamRoleArn?: string,
     *     processingInstanceType?: string,
     *     processingInstanceVolumeSizeInGB?: int,
     *     processingTimeOutInSeconds?: int,
     *     modelType?: string,
     *     configFileName?: string,
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
