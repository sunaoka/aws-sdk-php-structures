<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contactId
 */
class DescribeContactRequest extends Request
{
    /**
     * @param array{contactId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
