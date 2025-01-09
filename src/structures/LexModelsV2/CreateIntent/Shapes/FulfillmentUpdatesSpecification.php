<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $active
 * @property FulfillmentStartResponseSpecification $startResponse
 * @property FulfillmentUpdateResponseSpecification $updateResponse
 * @property int<1, 900> $timeoutInSeconds
 */
class FulfillmentUpdatesSpecification extends Shape
{
    /**
     * @param array{
     *     active: bool,
     *     startResponse?: FulfillmentStartResponseSpecification,
     *     updateResponse?: FulfillmentUpdateResponseSpecification,
     *     timeoutInSeconds?: int<1, 900>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
