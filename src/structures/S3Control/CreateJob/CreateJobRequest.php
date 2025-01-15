<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property bool|null $ConfirmationRequired
 * @property Shapes\JobOperation $Operation
 * @property Shapes\JobReport $Report
 * @property string $ClientRequestToken
 * @property Shapes\JobManifest|null $Manifest
 * @property string|null $Description
 * @property int<0, 2147483647> $Priority
 * @property string $RoleArn
 * @property list<Shapes\S3Tag>|null $Tags
 * @property Shapes\JobManifestGenerator|null $ManifestGenerator
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ConfirmationRequired?: bool|null,
     *     Operation: Shapes\JobOperation,
     *     Report: Shapes\JobReport,
     *     ClientRequestToken: string,
     *     Manifest?: Shapes\JobManifest|null,
     *     Description?: string|null,
     *     Priority: int<0, 2147483647>,
     *     RoleArn: string,
     *     Tags?: list<Shapes\S3Tag>|null,
     *     ManifestGenerator?: Shapes\JobManifestGenerator|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
