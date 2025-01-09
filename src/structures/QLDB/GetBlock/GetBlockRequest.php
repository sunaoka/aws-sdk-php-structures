<?php

namespace Sunaoka\Aws\Structures\QLDB\GetBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\ValueHolder $BlockAddress
 * @property Shapes\ValueHolder $DigestTipAddress
 */
class GetBlockRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     BlockAddress: Shapes\ValueHolder,
     *     DigestTipAddress?: Shapes\ValueHolder
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
