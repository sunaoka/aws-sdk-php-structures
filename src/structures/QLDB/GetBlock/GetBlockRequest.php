<?php

namespace Sunaoka\Aws\Structures\QLDB\GetBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\ValueHolder $BlockAddress
 * @property Shapes\ValueHolder|null $DigestTipAddress
 */
class GetBlockRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     BlockAddress: Shapes\ValueHolder,
     *     DigestTipAddress?: Shapes\ValueHolder|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
