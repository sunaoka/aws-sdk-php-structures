<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeExternalAccountBinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeExternalAccountBindingArn
 */
class DescribeAcmeExternalAccountBindingRequest extends Request
{
    /**
     * @param array{AcmeExternalAccountBindingArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
