<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DisassociateConfigurationItemsFromApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationConfigurationId
 * @property list<string> $configurationIds
 */
class DisassociateConfigurationItemsFromApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationConfigurationId: string,
     *     configurationIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
