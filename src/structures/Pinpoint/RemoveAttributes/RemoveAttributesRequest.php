<?php

namespace Sunaoka\Aws\Structures\Pinpoint\RemoveAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $AttributeType
 * @property Shapes\UpdateAttributesRequest $UpdateAttributesRequest
 */
class RemoveAttributesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     AttributeType: string,
     *     UpdateAttributesRequest: Shapes\UpdateAttributesRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
