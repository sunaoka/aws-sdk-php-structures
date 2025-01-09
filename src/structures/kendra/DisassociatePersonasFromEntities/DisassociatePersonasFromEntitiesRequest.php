<?php

namespace Sunaoka\Aws\Structures\kendra\DisassociatePersonasFromEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 * @property list<string> $EntityIds
 */
class DisassociatePersonasFromEntitiesRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IndexId: string,
     *     EntityIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
