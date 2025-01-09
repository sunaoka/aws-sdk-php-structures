<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateCoreDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $CoreDefinitionId
 * @property list<Shapes\Core> $Cores
 */
class CreateCoreDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     CoreDefinitionId: string,
     *     Cores?: list<Shapes\Core>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
