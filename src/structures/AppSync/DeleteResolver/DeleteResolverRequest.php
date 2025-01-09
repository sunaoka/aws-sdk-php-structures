<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $typeName
 * @property string $fieldName
 */
class DeleteResolverRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     typeName: string,
     *     fieldName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
