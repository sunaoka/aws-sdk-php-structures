<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppMessageTemplateMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\S3File|null $sourceS3File
 */
class CreateWhatsAppMessageTemplateMediaRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     sourceS3File?: Shapes\S3File|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
