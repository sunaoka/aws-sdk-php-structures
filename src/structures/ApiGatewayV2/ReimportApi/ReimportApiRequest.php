<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ReimportApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $Basepath
 * @property string $Body
 * @property bool|null $FailOnWarnings
 */
class ReimportApiRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
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
