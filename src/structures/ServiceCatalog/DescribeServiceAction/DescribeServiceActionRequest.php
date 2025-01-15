<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $AcceptLanguage
 */
class DescribeServiceActionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     AcceptLanguage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
