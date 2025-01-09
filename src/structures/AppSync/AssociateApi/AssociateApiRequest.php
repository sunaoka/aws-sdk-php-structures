<?php

namespace Sunaoka\Aws\Structures\AppSync\AssociateApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $apiId
 */
class AssociateApiRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     apiId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
