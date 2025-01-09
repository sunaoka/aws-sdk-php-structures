<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $active
 * @property FulfillmentStartResponseSpecification $startResponse
 * @property FulfillmentUpdateResponseSpecification $updateResponse
 * @property int $timeoutInSeconds
 */
class FulfillmentUpdatesSpecification extends Shape
{
    /**
     * @param array{
     *     active: bool,
     *     startResponse?: FulfillmentStartResponseSpecification,
     *     updateResponse?: FulfillmentUpdateResponseSpecification,
     *     timeoutInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
