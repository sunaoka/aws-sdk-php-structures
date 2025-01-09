<?php

namespace Sunaoka\Aws\Structures\Synthetics\DeleteCanary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool $DeleteLambda
 */
class DeleteCanaryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DeleteLambda?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
