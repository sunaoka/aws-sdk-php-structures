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
 * @property int $MaxRetries
 * @property Shapes\S3Location $OutputLocation
 * @property Shapes\ProfileConfiguration $Configuration
 * @property list<Shapes\ValidationConfiguration> $ValidationConfigurations
 * @property string $RoleArn
 * @property array<string, string> $Tags
 * @property int $Timeout
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
     *     MaxRetries?: int,
     *     OutputLocation: Shapes\S3Location,
     *     Configuration?: Shapes\ProfileConfiguration,
     *     ValidationConfigurations?: list<Shapes\ValidationConfiguration>,
     *     RoleArn: string,
     *     Tags?: array<string, string>,
     *     Timeout?: int,
     *     JobSample?: Shapes\JobSample
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
