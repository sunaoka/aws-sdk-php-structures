<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property PostFulfillmentStatusSpecification $postFulfillmentStatusSpecification
 * @property FulfillmentUpdatesSpecification $fulfillmentUpdatesSpecification
 * @property bool $active
 */
class FulfillmentCodeHookSettings extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     postFulfillmentStatusSpecification?: PostFulfillmentStatusSpecification,
     *     fulfillmentUpdatesSpecification?: FulfillmentUpdatesSpecification,
     *     active?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
