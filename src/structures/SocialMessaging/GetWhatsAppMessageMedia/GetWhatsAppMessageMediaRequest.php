<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppMessageMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mediaId
 * @property string $originationPhoneNumberId
 * @property bool $metadataOnly
 * @property Shapes\S3PresignedUrl $destinationS3PresignedUrl
 * @property Shapes\S3File $destinationS3File
 */
class GetWhatsAppMessageMediaRequest extends Request
{
    /**
     * @param array{
     *     mediaId: string,
     *     originationPhoneNumberId: string,
     *     metadataOnly?: bool,
     *     destinationS3PresignedUrl?: Shapes\S3PresignedUrl,
     *     destinationS3File?: Shapes\S3File
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
