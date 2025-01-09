<?php

namespace Sunaoka\Aws\Structures\Connect\StartAttachedFileUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $InstanceId
 * @property string $FileName
 * @property int<1, max> $FileSizeInBytes
 * @property int<5, 300> $UrlExpiryInSeconds
 * @property 'EMAIL_MESSAGE'|'ATTACHMENT' $FileUseCaseType
 * @property string $AssociatedResourceArn
 * @property Shapes\CreatedByInfo $CreatedBy
 * @property array<string, string> $Tags
 */
class StartAttachedFileUploadRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     InstanceId: string,
     *     FileName: string,
     *     FileSizeInBytes: int<1, max>,
     *     UrlExpiryInSeconds?: int<5, 300>,
     *     FileUseCaseType: 'EMAIL_MESSAGE'|'ATTACHMENT',
     *     AssociatedResourceArn: string,
     *     CreatedBy?: Shapes\CreatedByInfo,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
