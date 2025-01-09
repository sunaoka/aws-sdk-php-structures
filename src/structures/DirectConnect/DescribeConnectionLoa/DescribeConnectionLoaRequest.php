<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeConnectionLoa;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string $providerName
 * @property 'application/pdf' $loaContentType
 */
class DescribeConnectionLoaRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     providerName?: string,
     *     loaContentType?: 'application/pdf'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
