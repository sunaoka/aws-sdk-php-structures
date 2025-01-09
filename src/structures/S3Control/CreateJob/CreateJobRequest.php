<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property bool $ConfirmationRequired
 * @property Shapes\JobOperation $Operation
 * @property Shapes\JobReport $Report
 * @property string $ClientRequestToken
 * @property Shapes\JobManifest $Manifest
 * @property string $Description
 * @property int $Priority
 * @property string $RoleArn
 * @property list<Shapes\S3Tag> $Tags
 * @property Shapes\JobManifestGenerator $ManifestGenerator
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ConfirmationRequired?: bool,
     *     Operation: Shapes\JobOperation,
     *     Report: Shapes\JobReport,
     *     ClientRequestToken: string,
     *     Manifest?: Shapes\JobManifest,
     *     Description?: string,
     *     Priority: int,
     *     RoleArn: string,
     *     Tags?: list<Shapes\S3Tag>,
     *     ManifestGenerator?: Shapes\JobManifestGenerator
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
