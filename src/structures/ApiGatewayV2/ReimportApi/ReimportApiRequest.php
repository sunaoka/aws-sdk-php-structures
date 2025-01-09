<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ReimportApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $Basepath
 * @property string $Body
 * @property bool $FailOnWarnings
 */
class ReimportApiRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
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
