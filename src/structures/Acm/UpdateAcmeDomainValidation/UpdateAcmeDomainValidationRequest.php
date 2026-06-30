<?php

namespace Sunaoka\Aws\Structures\Acm\UpdateAcmeDomainValidation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeDomainValidationArn
 * @property Shapes\PrevalidationOptions|null $PrevalidationOptions
 */
class UpdateAcmeDomainValidationRequest extends Request
{
    /**
     * @param array{
     *     AcmeDomainValidationArn: string,
     *     PrevalidationOptions?: Shapes\PrevalidationOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
