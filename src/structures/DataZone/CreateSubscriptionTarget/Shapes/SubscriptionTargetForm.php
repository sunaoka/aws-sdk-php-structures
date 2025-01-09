<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property string $formName
 */
class SubscriptionTargetForm extends Shape
{
    /**
     * @param array{
     *     content: string,
     *     formName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
