<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeConstraint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $Id
 */
class DescribeConstraintRequest extends Request
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
