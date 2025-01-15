<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateProfileJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ProfileConfiguration|null $Configuration
 * @property string|null $EncryptionKeyArn
 * @property 'SSE-KMS'|'SSE-S3'|null $EncryptionMode
 * @property string $Name
 * @property 'ENABLE'|'DISABLE'|null $LogSubscription
 * @property int|null $MaxCapacity
 * @property int<0, max>|null $MaxRetries
 * @property Shapes\S3Location $OutputLocation
 * @property list<Shapes\ValidationConfiguration>|null $ValidationConfigurations
 * @property string $RoleArn
 * @property int<0, max>|null $Timeout
 * @property Shapes\JobSample|null $JobSample
 */
class UpdateProfileJobRequest extends Request
{
    /**
     * @param array{
     *     Configuration?: Shapes\ProfileConfiguration|null,
     *     EncryptionKeyArn?: string|null,
     *     EncryptionMode?: 'SSE-KMS'|'SSE-S3'|null,
     *     Name: string,
     *     LogSubscription?: 'ENABLE'|'DISABLE'|null,
     *     MaxCapacity?: int|null,
     *     MaxRetries?: int<0, max>|null,
     *     OutputLocation: Shapes\S3Location,
     *     ValidationConfigurations?: list<Shapes\ValidationConfiguration>|null,
     *     RoleArn: string,
     *     Timeout?: int<0, max>|null,
     *     JobSample?: Shapes\JobSample|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
