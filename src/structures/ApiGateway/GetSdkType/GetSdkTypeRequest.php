<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetSdkType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetSdkTypeRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
