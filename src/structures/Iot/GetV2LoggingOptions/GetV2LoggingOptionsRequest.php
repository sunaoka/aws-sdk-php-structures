<?php

namespace Sunaoka\Aws\Structures\Iot\GetV2LoggingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $verbose
 */
class GetV2LoggingOptionsRequest extends Request
{
    /**
     * @param array{verbose?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
