<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeConnectionLoa;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string|null $providerName
 * @property 'application/pdf'|null $loaContentType
 */
class DescribeConnectionLoaRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     providerName?: string|null,
     *     loaContentType?: 'application/pdf'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
