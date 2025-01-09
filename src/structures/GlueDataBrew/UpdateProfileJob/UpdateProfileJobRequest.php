<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateProfileJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ProfileConfiguration $Configuration
 * @property string $EncryptionKeyArn
 * @property 'SSE-KMS'|'SSE-S3' $EncryptionMode
 * @property string $Name
 * @property 'ENABLE'|'DISABLE' $LogSubscription
 * @property int $MaxCapacity
 * @property int<0, max> $MaxRetries
 * @property Shapes\S3Location $OutputLocation
 * @property list<Shapes\ValidationConfiguration> $ValidationConfigurations
 * @property string $RoleArn
 * @property int<0, max> $Timeout
 * @property Shapes\JobSample $JobSample
 */
class UpdateProfileJobRequest extends Request
{
    /**
     * @param array{
     *     Configuration?: Shapes\ProfileConfiguration,
     *     EncryptionKeyArn?: string,
     *     EncryptionMode?: 'SSE-KMS'|'SSE-S3',
     *     Name: string,
     *     LogSubscription?: 'ENABLE'|'DISABLE',
     *     MaxCapacity?: int,
     *     MaxRetries?: int<0, max>,
     *     OutputLocation: Shapes\S3Location,
     *     ValidationConfigurations?: list<Shapes\ValidationConfiguration>,
     *     RoleArn: string,
     *     Timeout?: int<0, max>,
     *     JobSample?: Shapes\JobSample
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
