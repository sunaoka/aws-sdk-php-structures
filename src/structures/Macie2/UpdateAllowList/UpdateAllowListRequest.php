<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateAllowList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AllowListCriteria $criteria
 * @property string|null $description
 * @property string $id
 * @property string $name
 */
class UpdateAllowListRequest extends Request
{
    /**
     * @param array{
     *     criteria: Shapes\AllowListCriteria,
     *     description?: string|null,
     *     id: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
