<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CustomEula'|'CustomDsa'|'EnterpriseEula'|'StandardEula'|'StandardDsa' $type
 * @property string $url
 * @property string|null $version
 */
class DocumentItem extends Shape
{
    /**
     * @param array{
     *     type: 'CustomEula'|'CustomDsa'|'EnterpriseEula'|'StandardEula'|'StandardDsa',
     *     url: string,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
