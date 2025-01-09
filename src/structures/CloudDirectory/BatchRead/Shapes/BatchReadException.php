<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ValidationException'|'InvalidArnException'|'ResourceNotFoundException'|'InvalidNextTokenException'|'AccessDeniedException'|'NotNodeException'|'FacetValidationException'|'CannotListParentOfRootException'|'NotIndexException'|'NotPolicyException'|'DirectoryNotEnabledException'|'LimitExceededException'|'InternalServiceException' $Type
 * @property string $Message
 */
class BatchReadException extends Shape
{
    /**
     * @param array{
     *     Type?: 'ValidationException'|'InvalidArnException'|'ResourceNotFoundException'|'InvalidNextTokenException'|'AccessDeniedException'|'NotNodeException'|'FacetValidationException'|'CannotListParentOfRootException'|'NotIndexException'|'NotPolicyException'|'DirectoryNotEnabledException'|'LimitExceededException'|'InternalServiceException',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
