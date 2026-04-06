<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\PostWhatsAppMessageMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $originationPhoneNumberId
 * @property Shapes\S3PresignedUrl|null $sourceS3PresignedUrl
 * @property Shapes\S3File|null $sourceS3File
 */
class PostWhatsAppMessageMediaRequest extends Request
{
    /**
     * @param array{
     *     originationPhoneNumberId: string,
     *     sourceS3PresignedUrl?: Shapes\S3PresignedUrl|null,
     *     sourceS3File?: Shapes\S3File|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
