<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AssociateTagOptionWithResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string $TagOptionId
 */
class AssociateTagOptionWithResourceRequest extends Request
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
