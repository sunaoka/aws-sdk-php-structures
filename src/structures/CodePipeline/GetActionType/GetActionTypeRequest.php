<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetActionType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Source'|'Build'|'Deploy'|'Test'|'Invoke'|'Approval'|'Compute' $category
 * @property string $owner
 * @property string $provider
 * @property string $version
 */
class GetActionTypeRequest extends Request
{
    /**
     * @param array{
     *     category: 'Source'|'Build'|'Deploy'|'Test'|'Invoke'|'Approval'|'Compute',
     *     owner: string,
     *     provider: string,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
