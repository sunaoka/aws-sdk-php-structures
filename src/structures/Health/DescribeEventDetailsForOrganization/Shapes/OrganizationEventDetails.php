<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetailsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsAccountId
 * @property Event|null $event
 * @property EventDescription|null $eventDescription
 * @property array<string, string>|null $eventMetadata
 */
class OrganizationEventDetails extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     event?: Event|null,
     *     eventDescription?: EventDescription|null,
     *     eventMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
