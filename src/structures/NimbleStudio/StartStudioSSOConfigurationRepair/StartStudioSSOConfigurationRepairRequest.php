<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\StartStudioSSOConfigurationRepair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $studioId
 */
class StartStudioSSOConfigurationRepairRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
