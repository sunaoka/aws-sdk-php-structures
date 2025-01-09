<?php

namespace Sunaoka\Aws\Structures\AppSync\DisassociateMergedGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceApiIdentifier
 * @property string $associationId
 */
class DisassociateMergedGraphqlApiRequest extends Request
{
    /**
     * @param array{
     *     sourceApiIdentifier: string,
     *     associationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
