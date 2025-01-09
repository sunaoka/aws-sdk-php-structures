<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\PrepareQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryString
 * @property bool $ValidateOnly
 */
class PrepareQueryRequest extends Request
{
    /**
     * @param array{
     *     QueryString: string,
     *     ValidateOnly?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
