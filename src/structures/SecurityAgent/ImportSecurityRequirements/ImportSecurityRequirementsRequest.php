<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ImportSecurityRequirements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packId
 * @property Shapes\ImportSource $input
 */
class ImportSecurityRequirementsRequest extends Request
{
    /**
     * @param array{
     *     packId: string,
     *     input: Shapes\ImportSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
