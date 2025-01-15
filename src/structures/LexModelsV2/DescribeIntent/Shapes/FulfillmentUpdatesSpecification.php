<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $active
 * @property FulfillmentStartResponseSpecification|null $startResponse
 * @property FulfillmentUpdateResponseSpecification|null $updateResponse
 * @property int<1, 900>|null $timeoutInSeconds
 */
class FulfillmentUpdatesSpecification extends Shape
{
    /**
     * @param array{
     *     active: bool,
     *     startResponse?: FulfillmentStartResponseSpecification|null,
     *     updateResponse?: FulfillmentUpdateResponseSpecification|null,
     *     timeoutInSeconds?: int<1, 900>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
