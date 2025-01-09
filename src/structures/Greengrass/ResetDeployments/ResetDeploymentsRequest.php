<?php

namespace Sunaoka\Aws\Structures\Greengrass\ResetDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property bool $Force
 * @property string $GroupId
 */
class ResetDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     Force?: bool,
     *     GroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
