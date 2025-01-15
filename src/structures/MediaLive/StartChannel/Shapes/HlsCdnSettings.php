<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HlsAkamaiSettings|null $HlsAkamaiSettings
 * @property HlsBasicPutSettings|null $HlsBasicPutSettings
 * @property HlsMediaStoreSettings|null $HlsMediaStoreSettings
 * @property HlsS3Settings|null $HlsS3Settings
 * @property HlsWebdavSettings|null $HlsWebdavSettings
 */
class HlsCdnSettings extends Shape
{
    /**
     * @param array{
     *     HlsAkamaiSettings?: HlsAkamaiSettings|null,
     *     HlsBasicPutSettings?: HlsBasicPutSettings|null,
     *     HlsMediaStoreSettings?: HlsMediaStoreSettings|null,
     *     HlsS3Settings?: HlsS3Settings|null,
     *     HlsWebdavSettings?: HlsWebdavSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
