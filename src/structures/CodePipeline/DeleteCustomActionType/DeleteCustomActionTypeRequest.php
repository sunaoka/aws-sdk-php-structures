<?php

namespace Sunaoka\Aws\Structures\CodePipeline\DeleteCustomActionType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Source'|'Build'|'Deploy'|'Test'|'Invoke'|'Approval'|'Compute' $category
 * @property string $provider
 * @property string $version
 */
class DeleteCustomActionTypeRequest extends Request
{
    /**
     * @param array{
     *     category: 'Source'|'Build'|'Deploy'|'Test'|'Invoke'|'Approval'|'Compute',
     *     provider: string,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
