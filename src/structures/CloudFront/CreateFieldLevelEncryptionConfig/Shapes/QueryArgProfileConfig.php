<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateFieldLevelEncryptionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ForwardWhenQueryArgProfileIsUnknown
 * @property QueryArgProfiles|null $QueryArgProfiles
 */
class QueryArgProfileConfig extends Shape
{
    /**
     * @param array{
     *     ForwardWhenQueryArgProfileIsUnknown: bool,
     *     QueryArgProfiles?: QueryArgProfiles|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
