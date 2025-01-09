<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HlsAkamaiSettings $HlsAkamaiSettings
 * @property HlsBasicPutSettings $HlsBasicPutSettings
 * @property HlsMediaStoreSettings $HlsMediaStoreSettings
 * @property HlsS3Settings $HlsS3Settings
 * @property HlsWebdavSettings $HlsWebdavSettings
 */
class HlsCdnSettings extends Shape
{
    /**
     * @param array{
     *     HlsAkamaiSettings?: HlsAkamaiSettings,
     *     HlsBasicPutSettings?: HlsBasicPutSettings,
     *     HlsMediaStoreSettings?: HlsMediaStoreSettings,
     *     HlsS3Settings?: HlsS3Settings,
     *     HlsWebdavSettings?: HlsWebdavSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
