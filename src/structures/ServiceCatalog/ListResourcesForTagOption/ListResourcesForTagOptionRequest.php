<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListResourcesForTagOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TagOptionId
 * @property string $ResourceType
 * @property int<0, 20> $PageSize
 * @property string $PageToken
 */
class ListResourcesForTagOptionRequest extends Request
{
    /**
     * @param array{
     *     TagOptionId: string,
     *     ResourceType?: string,
     *     PageSize?: int<0, 20>,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
