<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppMessageMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mediaId
 * @property string $originationPhoneNumberId
 * @property bool|null $metadataOnly
 * @property Shapes\S3PresignedUrl|null $destinationS3PresignedUrl
 * @property Shapes\S3File|null $destinationS3File
 */
class GetWhatsAppMessageMediaRequest extends Request
{
    /**
     * @param array{
     *     mediaId: string,
     *     originationPhoneNumberId: string,
     *     metadataOnly?: bool|null,
     *     destinationS3PresignedUrl?: Shapes\S3PresignedUrl|null,
     *     destinationS3File?: Shapes\S3File|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
