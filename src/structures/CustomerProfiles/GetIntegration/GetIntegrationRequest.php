<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Uri
 */
class GetIntegrationRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
