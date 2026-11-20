<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommendedChannel
 * @property list<BestOutreachWindow>|null $BestOutreachWindows
 */
class ChannelRecommendation extends Shape
{
    /**
     * @param array{
     *     RecommendedChannel: string,
     *     BestOutreachWindows?: list<BestOutreachWindow>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
