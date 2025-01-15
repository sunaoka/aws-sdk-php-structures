<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ActivityResponse> $Item
 * @property string|null $NextToken
 */
class ActivitiesResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<ActivityResponse>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
