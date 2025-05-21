<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property string $ResourceDefinitionId
 * @property list<Shapes\ResourceShape>|null $Resources
 */
class CreateResourceDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     ResourceDefinitionId: string,
     *     Resources?: list<Shapes\ResourceShape>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
