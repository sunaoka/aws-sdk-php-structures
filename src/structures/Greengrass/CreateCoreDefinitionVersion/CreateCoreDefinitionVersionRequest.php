<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateCoreDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property string $CoreDefinitionId
 * @property list<Shapes\Core>|null $Cores
 */
class CreateCoreDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     CoreDefinitionId: string,
     *     Cores?: list<Shapes\Core>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
