<?php

namespace Sunaoka\Aws\Structures\Connect\StartAttachedFileUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $InstanceId
 * @property string $FileName
 * @property int<1, max> $FileSizeInBytes
 * @property int<5, 300>|null $UrlExpiryInSeconds
 * @property 'EMAIL_MESSAGE'|'ATTACHMENT' $FileUseCaseType
 * @property string $AssociatedResourceArn
 * @property Shapes\CreatedByInfo|null $CreatedBy
 * @property array<string, string>|null $Tags
 */
class StartAttachedFileUploadRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     InstanceId: string,
     *     FileName: string,
     *     FileSizeInBytes: int<1, max>,
     *     UrlExpiryInSeconds?: int<5, 300>|null,
     *     FileUseCaseType: 'EMAIL_MESSAGE'|'ATTACHMENT',
     *     AssociatedResourceArn: string,
     *     CreatedBy?: Shapes\CreatedByInfo|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
