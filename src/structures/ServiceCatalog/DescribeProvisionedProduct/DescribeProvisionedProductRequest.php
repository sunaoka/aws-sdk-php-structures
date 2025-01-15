<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $Id
 * @property string|null $Name
 */
class DescribeProvisionedProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     Id?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
