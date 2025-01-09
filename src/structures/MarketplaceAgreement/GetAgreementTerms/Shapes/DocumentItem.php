<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property string $url
 * @property string $version
 */
class DocumentItem extends Shape
{
    /**
     * @param array{
     *     type?: string,
     *     url?: string,
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
