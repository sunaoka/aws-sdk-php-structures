<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteFleetRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
