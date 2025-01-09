<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeFaq;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 */
class DescribeFaqRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IndexId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
