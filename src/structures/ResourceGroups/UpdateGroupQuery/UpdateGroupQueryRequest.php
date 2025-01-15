<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UpdateGroupQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property string|null $Group
 * @property Shapes\ResourceQuery $ResourceQuery
 */
class UpdateGroupQueryRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     Group?: string|null,
     *     ResourceQuery: Shapes\ResourceQuery
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
