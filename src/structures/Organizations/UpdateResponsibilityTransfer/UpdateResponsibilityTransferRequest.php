<?php

namespace Sunaoka\Aws\Structures\Organizations\UpdateResponsibilityTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 */
class UpdateResponsibilityTransferRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
