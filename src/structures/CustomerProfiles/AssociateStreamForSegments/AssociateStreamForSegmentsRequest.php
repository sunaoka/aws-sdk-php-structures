<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\AssociateStreamForSegments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $DestinationArn
 * @property string $DestinationRoleArn
 */
class AssociateStreamForSegmentsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DestinationArn: string,
     *     DestinationRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
