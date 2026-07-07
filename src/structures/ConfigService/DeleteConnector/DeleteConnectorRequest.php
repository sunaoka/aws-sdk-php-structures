<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteConnectorRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
