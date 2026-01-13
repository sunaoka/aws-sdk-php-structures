<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $formName
 * @property string $content
 */
class SubscriptionTargetForm extends Shape
{
    /**
     * @param array{
     *     formName: string,
     *     content: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
