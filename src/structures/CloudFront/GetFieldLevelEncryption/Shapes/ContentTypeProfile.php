<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'URLEncoded' $Format
 * @property string $ProfileId
 * @property string $ContentType
 */
class ContentTypeProfile extends Shape
{
    /**
     * @param array{
     *     Format: 'URLEncoded',
     *     ProfileId?: string,
     *     ContentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
