<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\PrepareQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryString
 * @property bool|null $ValidateOnly
 */
class PrepareQueryRequest extends Request
{
    /**
     * @param array{
     *     QueryString: string,
     *     ValidateOnly?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
