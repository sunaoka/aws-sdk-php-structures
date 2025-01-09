<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UpdateGroupQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $Group
 * @property Shapes\ResourceQuery $ResourceQuery
 */
class UpdateGroupQueryRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string,
     *     Group?: string,
     *     ResourceQuery: Shapes\ResourceQuery
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
