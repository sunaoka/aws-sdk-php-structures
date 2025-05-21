<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExecutiveSummaryConfigurations|null $ExecutiveSummary
 */
class AmazonQInQuickSightDashboardConfigurations extends Shape
{
    /**
     * @param array{ExecutiveSummary?: ExecutiveSummaryConfigurations|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
