<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ImportApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Basepath
 * @property string $Body
 * @property bool $FailOnWarnings
 */
class ImportApiRequest extends Request
{
    /**
     * @param array{
     *     Basepath?: string,
     *     Body: string,
     *     FailOnWarnings?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
