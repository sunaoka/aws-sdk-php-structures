<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\UnshareApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $OrganizationId
 */
class UnshareApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     OrganizationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
