<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateProfileJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property string $EncryptionKeyArn
 * @property 'SSE-KMS'|'SSE-S3' $EncryptionMode
 * @property string $Name
 * @property 'ENABLE'|'DISABLE' $LogSubscription
 * @property int $MaxCapacity
 * @property int<0, max> $MaxRetries
 * @property Shapes\S3Location $OutputLocation
 * @property Shapes\ProfileConfiguration $Configuration
 * @property list<Shapes\ValidationConfiguration> $ValidationConfigurations
 * @property string $RoleArn
 * @property array<string, string> $Tags
 * @property int<0, max> $Timeout
 * @property Shapes\JobSample $JobSample
 */
class CreateProfileJobRequest extends Request
{
    /**
     * @param array{
     *     DatasetName: string,
     *     EncryptionKeyArn?: string,
     *     EncryptionMode?: 'SSE-KMS'|'SSE-S3',
     *     Name: string,
     *     LogSubscription?: 'ENABLE'|'DISABLE',
     *     MaxCapacity?: int,
     *     MaxRetries?: int<0, max>,
     *     OutputLocation: Shapes\S3Location,
     *     Configuration?: Shapes\ProfileConfiguration,
     *     ValidationConfigurations?: list<Shapes\ValidationConfiguration>,
     *     RoleArn: string,
     *     Tags?: array<string, string>,
     *     Timeout?: int<0, max>,
     *     JobSample?: Shapes\JobSample
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
