<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchEnableStandards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StandardsArn
 * @property array<string, string>|null $StandardsInput
 */
class StandardsSubscriptionRequest extends Shape
{
    /**
     * @param array{
     *     StandardsArn: string,
     *     StandardsInput?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
