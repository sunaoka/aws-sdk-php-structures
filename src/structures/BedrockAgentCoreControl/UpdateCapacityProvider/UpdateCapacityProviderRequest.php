<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capacityProviderId
 * @property Shapes\UpdatedDescription|null $description
 * @property string|null $clientToken
 */
class UpdateCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     capacityProviderId: string,
     *     description?: Shapes\UpdatedDescription|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
