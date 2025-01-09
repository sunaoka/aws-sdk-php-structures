<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAvailabilityConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAvailabilityConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
