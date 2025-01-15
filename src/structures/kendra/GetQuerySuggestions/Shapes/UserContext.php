<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Token
 * @property string|null $UserId
 * @property list<string>|null $Groups
 * @property list<DataSourceGroup>|null $DataSourceGroups
 */
class UserContext extends Shape
{
    /**
     * @param array{
     *     Token?: string|null,
     *     UserId?: string|null,
     *     Groups?: list<string>|null,
     *     DataSourceGroups?: list<DataSourceGroup>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
