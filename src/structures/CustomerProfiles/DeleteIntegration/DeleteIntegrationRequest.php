<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Uri
 */
class DeleteIntegrationRequest extends Request
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
