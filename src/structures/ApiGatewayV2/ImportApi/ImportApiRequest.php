<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ImportApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Basepath
 * @property string $Body
 * @property bool|null $FailOnWarnings
 */
class ImportApiRequest extends Request
{
    /**
     * @param array{
     *     Basepath?: string|null,
     *     Body: string,
     *     FailOnWarnings?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
