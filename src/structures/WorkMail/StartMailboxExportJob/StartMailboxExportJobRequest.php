<?php

namespace Sunaoka\Aws\Structures\WorkMail\StartMailboxExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $OrganizationId
 * @property string $EntityId
 * @property string $Description
 * @property string $RoleArn
 * @property string $KmsKeyArn
 * @property string $S3BucketName
 * @property string $S3Prefix
 */
class StartMailboxExportJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     OrganizationId: string,
     *     EntityId: string,
     *     Description?: string,
     *     RoleArn: string,
     *     KmsKeyArn: string,
     *     S3BucketName: string,
     *     S3Prefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
