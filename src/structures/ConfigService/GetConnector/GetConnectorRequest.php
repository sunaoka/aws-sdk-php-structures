<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetConnectorRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
