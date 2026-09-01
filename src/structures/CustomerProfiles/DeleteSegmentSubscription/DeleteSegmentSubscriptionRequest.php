<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteSegmentSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $SegmentDefinitionName
 */
class DeleteSegmentSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentDefinitionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
