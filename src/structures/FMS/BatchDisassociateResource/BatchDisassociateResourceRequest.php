<?php

namespace Sunaoka\Aws\Structures\FMS\BatchDisassociateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceSetIdentifier
 * @property list<string> $Items
 */
class BatchDisassociateResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceSetIdentifier: string,
     *     Items: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
