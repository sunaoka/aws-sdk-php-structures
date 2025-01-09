<?php

namespace Sunaoka\Aws\Structures\AppSync\StartSchemaMerge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $associationId
 * @property string $mergedApiIdentifier
 */
class StartSchemaMergeRequest extends Request
{
    /**
     * @param array{
     *     associationId: string,
     *     mergedApiIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
