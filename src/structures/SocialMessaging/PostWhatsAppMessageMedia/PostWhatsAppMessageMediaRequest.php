<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\PostWhatsAppMessageMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $originationPhoneNumberId
 * @property Shapes\S3PresignedUrl $sourceS3PresignedUrl
 * @property Shapes\S3File $sourceS3File
 */
class PostWhatsAppMessageMediaRequest extends Request
{
    /**
     * @param array{
     *     originationPhoneNumberId: string,
     *     sourceS3PresignedUrl?: Shapes\S3PresignedUrl,
     *     sourceS3File?: Shapes\S3File
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
