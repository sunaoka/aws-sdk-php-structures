<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\TagResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $StatusCode
 * @property 'InternalServiceException'|'InvalidParameterException'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class FailureInfo extends Shape
{
    /**
     * @param array{
     *     StatusCode?: int|null,
     *     ErrorCode?: 'InternalServiceException'|'InvalidParameterException'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
