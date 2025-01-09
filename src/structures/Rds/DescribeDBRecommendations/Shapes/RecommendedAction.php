<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionId
 * @property string $Title
 * @property string $Description
 * @property string $Operation
 * @property list<RecommendedActionParameter> $Parameters
 * @property list<string> $ApplyModes
 * @property string $Status
 * @property IssueDetails $IssueDetails
 * @property list<ContextAttribute> $ContextAttributes
 */
class RecommendedAction extends Shape
{
    /**
     * @param array{
     *     ActionId?: string,
     *     Title?: string,
     *     Description?: string,
     *     Operation?: string,
     *     Parameters?: list<RecommendedActionParameter>,
     *     ApplyModes?: list<string>,
     *     Status?: string,
     *     IssueDetails?: IssueDetails,
     *     ContextAttributes?: list<ContextAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
