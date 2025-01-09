<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\TagResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StatusCode
 * @property 'InternalServiceException'|'InvalidParameterException' $ErrorCode
 * @property string $ErrorMessage
 */
class FailureInfo extends Shape
{
    /**
     * @param array{
     *     StatusCode?: int,
     *     ErrorCode?: 'InternalServiceException'|'InvalidParameterException',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
