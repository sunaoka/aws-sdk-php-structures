<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property PostFulfillmentStatusSpecification|null $postFulfillmentStatusSpecification
 * @property FulfillmentUpdatesSpecification|null $fulfillmentUpdatesSpecification
 * @property bool|null $active
 */
class FulfillmentCodeHookSettings extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     postFulfillmentStatusSpecification?: PostFulfillmentStatusSpecification|null,
     *     fulfillmentUpdatesSpecification?: FulfillmentUpdatesSpecification|null,
     *     active?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
