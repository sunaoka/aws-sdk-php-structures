<?php

namespace Sunaoka\Aws\Structures\Greengrass\ResetDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property bool|null $Force
 * @property string $GroupId
 */
class ResetDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     Force?: bool|null,
     *     GroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
