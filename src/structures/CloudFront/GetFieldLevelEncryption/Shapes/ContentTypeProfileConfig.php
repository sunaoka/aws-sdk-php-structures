<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ForwardWhenContentTypeIsUnknown
 * @property ContentTypeProfiles|null $ContentTypeProfiles
 */
class ContentTypeProfileConfig extends Shape
{
    /**
     * @param array{
     *     ForwardWhenContentTypeIsUnknown: bool,
     *     ContentTypeProfiles?: ContentTypeProfiles|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
