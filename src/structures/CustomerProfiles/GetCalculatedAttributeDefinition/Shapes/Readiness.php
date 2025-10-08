<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $ProgressPercentage
 * @property string|null $Message
 */
class Readiness extends Shape
{
    /**
     * @param array{
     *     ProgressPercentage?: int<0, 100>|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
