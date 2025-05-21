<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataQnAConfigurations|null $DataQnA
 * @property GenerativeAuthoringConfigurations|null $GenerativeAuthoring
 * @property ExecutiveSummaryConfigurations|null $ExecutiveSummary
 * @property DataStoriesConfigurations|null $DataStories
 */
class AmazonQInQuickSightConsoleConfigurations extends Shape
{
    /**
     * @param array{
     *     DataQnA?: DataQnAConfigurations|null,
     *     GenerativeAuthoring?: GenerativeAuthoringConfigurations|null,
     *     ExecutiveSummary?: ExecutiveSummaryConfigurations|null,
     *     DataStories?: DataStoriesConfigurations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
