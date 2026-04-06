<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class GetAppValidationOutputRequest extends Request
{
    /**
     * @param array{appId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
