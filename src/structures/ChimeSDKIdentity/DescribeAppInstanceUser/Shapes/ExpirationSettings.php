<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 5475> $ExpirationDays
 * @property 'CREATED_TIMESTAMP' $ExpirationCriterion
 */
class ExpirationSettings extends Shape
{
    /**
     * @param array{
     *     ExpirationDays: int<1, 5475>,
     *     ExpirationCriterion: 'CREATED_TIMESTAMP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
