<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $Id
 * @property string|null $Name
 */
class DescribeProductRequest extends Request
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
