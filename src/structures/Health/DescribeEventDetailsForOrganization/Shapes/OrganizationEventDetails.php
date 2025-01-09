<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetailsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property Event $event
 * @property EventDescription $eventDescription
 * @property array<string, string> $eventMetadata
 */
class OrganizationEventDetails extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     event?: Event,
     *     eventDescription?: EventDescription,
     *     eventMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
