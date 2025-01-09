<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetSubscriptionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Source
 * @property string $Subject
 * @property string $Target
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Source: string,
     *     Subject: string,
     *     Target: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
