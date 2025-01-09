<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFieldLevelEncryptionConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ForwardWhenContentTypeIsUnknown
 * @property ContentTypeProfiles $ContentTypeProfiles
 */
class ContentTypeProfileConfig extends Shape
{
    /**
     * @param array{
     *     ForwardWhenContentTypeIsUnknown: bool,
     *     ContentTypeProfiles?: ContentTypeProfiles
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
