<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFieldLevelEncryptionConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'URLEncoded' $Format
 * @property string|null $ProfileId
 * @property string $ContentType
 */
class ContentTypeProfile extends Shape
{
    /**
     * @param array{
     *     Format: 'URLEncoded',
     *     ProfileId?: string|null,
     *     ContentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
