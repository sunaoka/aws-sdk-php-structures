<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeInterconnectLoa;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $interconnectId
 * @property string|null $providerName
 * @property 'application/pdf'|null $loaContentType
 */
class DescribeInterconnectLoaRequest extends Request
{
    /**
     * @param array{
     *     interconnectId: string,
     *     providerName?: string|null,
     *     loaContentType?: 'application/pdf'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
