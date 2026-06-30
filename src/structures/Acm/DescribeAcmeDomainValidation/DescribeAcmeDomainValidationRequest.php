<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeDomainValidation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeDomainValidationArn
 */
class DescribeAcmeDomainValidationRequest extends Request
{
    /**
     * @param array{AcmeDomainValidationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
