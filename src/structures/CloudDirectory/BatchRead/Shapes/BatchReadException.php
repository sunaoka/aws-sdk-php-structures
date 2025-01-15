<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ValidationException'|'InvalidArnException'|'ResourceNotFoundException'|'InvalidNextTokenException'|'AccessDeniedException'|'NotNodeException'|'FacetValidationException'|'CannotListParentOfRootException'|'NotIndexException'|'NotPolicyException'|'DirectoryNotEnabledException'|'LimitExceededException'|'InternalServiceException'|null $Type
 * @property string|null $Message
 */
class BatchReadException extends Shape
{
    /**
     * @param array{
     *     Type?: 'ValidationException'|'InvalidArnException'|'ResourceNotFoundException'|'InvalidNextTokenException'|'AccessDeniedException'|'NotNodeException'|'FacetValidationException'|'CannotListParentOfRootException'|'NotIndexException'|'NotPolicyException'|'DirectoryNotEnabledException'|'LimitExceededException'|'InternalServiceException'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
