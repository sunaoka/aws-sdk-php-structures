<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $Id
 * @property string $Name
 */
class DescribeProvisionedProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     Id?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
