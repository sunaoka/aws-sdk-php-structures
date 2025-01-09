<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ForwardWhenQueryArgProfileIsUnknown
 * @property QueryArgProfiles $QueryArgProfiles
 */
class QueryArgProfileConfig extends Shape
{
    /**
     * @param array{
     *     ForwardWhenQueryArgProfileIsUnknown: bool,
     *     QueryArgProfiles?: QueryArgProfiles
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
