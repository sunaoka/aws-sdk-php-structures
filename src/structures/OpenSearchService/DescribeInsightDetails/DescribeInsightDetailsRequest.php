<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInsightDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InsightEntity $Entity
 * @property string $InsightId
 * @property bool|null $ShowHtmlContent
 */
class DescribeInsightDetailsRequest extends Request
{
    /**
     * @param array{
     *     Entity: Shapes\InsightEntity,
     *     InsightId: string,
     *     ShowHtmlContent?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
