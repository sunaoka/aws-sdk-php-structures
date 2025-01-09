<?php

namespace Sunaoka\Aws\Structures\Pricing\GetPriceListFileUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PriceListArn
 * @property string $FileFormat
 */
class GetPriceListFileUrlRequest extends Request
{
    /**
     * @param array{
     *     PriceListArn: string,
     *     FileFormat: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
