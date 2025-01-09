<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociateTagOptionFromResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string $TagOptionId
 */
class DisassociateTagOptionFromResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     TagOptionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
