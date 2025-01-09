<?php

namespace Sunaoka\Aws\Structures\Appflow\DeleteConnectorProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorProfileName
 * @property bool $forceDelete
 */
class DeleteConnectorProfileRequest extends Request
{
    /**
     * @param array{
     *     connectorProfileName: string,
     *     forceDelete?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
