<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $AcceptLanguage
 */
class DescribeServiceActionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     AcceptLanguage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
