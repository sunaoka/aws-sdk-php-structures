<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $ResourceDefinitionId
 * @property list<Shapes\Resource> $Resources
 */
class CreateResourceDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     ResourceDefinitionId: string,
     *     Resources?: list<Shapes\Resource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
