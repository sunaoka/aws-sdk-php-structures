<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Token
 * @property string $UserId
 * @property list<string> $Groups
 * @property list<DataSourceGroup> $DataSourceGroups
 */
class UserContext extends Shape
{
    /**
     * @param array{
     *     Token?: string,
     *     UserId?: string,
     *     Groups?: list<string>,
     *     DataSourceGroups?: list<DataSourceGroup>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
