<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListResourcesForTagOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TagOptionId
 * @property string|null $ResourceType
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 */
class ListResourcesForTagOptionRequest extends Request
{
    /**
     * @param array{
     *     TagOptionId: string,
     *     ResourceType?: string|null,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
