<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $Id
 */
class DescribeProductViewRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
