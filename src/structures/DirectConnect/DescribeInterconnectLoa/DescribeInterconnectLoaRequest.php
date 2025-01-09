<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeInterconnectLoa;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $interconnectId
 * @property string $providerName
 * @property 'application/pdf' $loaContentType
 */
class DescribeInterconnectLoaRequest extends Request
{
    /**
     * @param array{
     *     interconnectId: string,
     *     providerName?: string,
     *     loaContentType?: 'application/pdf'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
