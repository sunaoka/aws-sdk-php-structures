<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListRevisionAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property 'TABLE'|'DATABASE' $ResourceType
 * @property LFResourceDetails $ResourceDetails
 */
class LFTagPolicyDetails extends Shape
{
    /**
     * @param array{
     *     CatalogId: string,
     *     ResourceType: 'TABLE'|'DATABASE',
     *     ResourceDetails: LFResourceDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
