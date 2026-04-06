<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActionId
 * @property string|null $Title
 * @property string|null $Description
 * @property string|null $Operation
 * @property list<RecommendedActionParameter>|null $Parameters
 * @property list<string>|null $ApplyModes
 * @property string|null $Status
 * @property IssueDetails|null $IssueDetails
 * @property list<ContextAttribute>|null $ContextAttributes
 */
class RecommendedAction extends Shape
{
    /**
     * @param array{
     *     ActionId?: string|null,
     *     Title?: string|null,
     *     Description?: string|null,
     *     Operation?: string|null,
     *     Parameters?: list<RecommendedActionParameter>|null,
     *     ApplyModes?: list<string>|null,
     *     Status?: string|null,
     *     IssueDetails?: IssueDetails|null,
     *     ContextAttributes?: list<ContextAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
