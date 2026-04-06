<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAnalyzerRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IssueLocation $issueLocation
 * @property 'High'|'Medium'|'Low' $priority
 * @property string $issueDescription
 * @property string $proposedFix
 */
class BotAnalyzerRecommendation extends Shape
{
    /**
     * @param array{
     *     issueLocation: IssueLocation,
     *     priority: 'High'|'Medium'|'Low',
     *     issueDescription: string,
     *     proposedFix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
