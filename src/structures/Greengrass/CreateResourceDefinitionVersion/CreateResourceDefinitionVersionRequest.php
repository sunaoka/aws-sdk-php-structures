<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property string $ResourceDefinitionId
 * @property list<Shapes\Resource>|null $Resources
 */
class CreateResourceDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     ResourceDefinitionId: string,
     *     Resources?: list<Shapes\Resource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
